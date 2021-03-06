<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "organization".
 *
 * @property integer $organization_id
 * @property string $organization_name
 * @property integer $organization_type_id
 * @property integer $category_id
 * @property string $img_name
 * @property string $advert_mess_text
 * @property string $addit_inf
 * @property integer $address_id
 * @property integer $ad_type_id
 * @property string $stand_form
 * @property string $size
 * @property string $domin_colors
 * @property string $date
 * @property integer $rating
 * @property integer $user_id
 *
 * @property AdType $adType
 * @property Address $address
 * @property Category $category
 * @property OrganizationType $organizationType
 * @property Users $user
 */
class Organization extends \yii\db\ActiveRecord
{






    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'organization';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['organization_type_id', 'category_id', 'address_id', 'ad_type_id', 'rating', 'user_id'], 'integer'],
            [['advert_mess_text', 'addit_inf', 'domin_colors'], 'string'],
            [['date'], 'safe'],
            [['organization_name', 'stand_form', 'size'], 'string', 'max' => 45],
            [['img_name'], 'string', 'max' => 100],
            [['ad_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdType::className(), 'targetAttribute' => ['ad_type_id' => 'ad_type_id']],
            [['address_id'], 'exist', 'skipOnError' => true, 'targetClass' => Address::className(), 'targetAttribute' => ['address_id' => 'address_id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'category_id']],
            [['organization_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => OrganizationType::className(), 'targetAttribute' => ['organization_type_id' => 'organization_type_id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'organization_id' => 'ID организации',
            'organization_name' => 'Название',
            'organization_type_id' => 'Тип орг.',
            'category_id' => 'Категория',
            'img_name' => 'Изображение',
            'advert_mess_text' => 'Текст сообщения',
            'addit_inf' => 'Доп. информация',
            'address_id' => 'Адрес',
            'ad_type_id' => 'Тип рекламы',
            'stand_form' => 'Стандартные формы',
            'size' => 'Размер',
            'domin_colors' => 'Цвета',
            'date' => 'Дата',
            'rating' => 'Оценка',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdType()
    {
        return $this->hasOne(AdType::className(), ['ad_type_id' => 'ad_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddress()
    {
        return $this->hasOne(Address::className(), ['address_id' => 'address_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['category_id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrganizationType()
    {
        return $this->hasOne(OrganizationType::className(), ['organization_type_id' => 'organization_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'user_id']);
    }
}
