<?php

/**
 * This is the model class for table "pasien".
 *
 * The followings are the available columns in table 'pasien':
 * @property integer $id
 * @property string $nama
 * @property integer $umur
 * @property integer $wilayah_id
 * @property integer $tindakan_id
 *
 * The followings are the available model relations:
 * @property Tindakan $tindakan
 * @property Wilayah $wilayah
 */
class Pasien extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pasien';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, umur, wilayah_id, tindakan_id', 'required'),
			array('umur, wilayah_id, tindakan_id', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nama, umur, wilayah_id, tindakan_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'tindakan' => array(self::BELONGS_TO, 'Tindakan', 'tindakan_id'),
			'wilayah' => array(self::BELONGS_TO, 'Wilayah', 'wilayah_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama' => 'Nama',
			'umur' => 'Umur',
			'wilayah_id' => 'Wilayah',
			'tindakan_id' => 'Tindakan',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('umur',$this->umur);
		$criteria->compare('wilayah_id',$this->wilayah_id);
		$criteria->compare('tindakan_id',$this->tindakan_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pasien the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
