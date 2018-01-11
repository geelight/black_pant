<?php

use yii\db\Migration;

/**
 * Class m171213_063710_update_column_to_column_table
 */
class m180111_015417_update_column_to_column_table extends Migration
{
    /**
     * @var string 专栏表
     */
    public $tableName = '{{%column}}';

    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn(
            $this->tableName,
            'category_id',
            $this->integer()->defaultValue(null)->comment('分类ID')->after('id')
        );
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropColumn($this->tableName, 'category_id');
    }
}
