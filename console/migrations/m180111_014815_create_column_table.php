<?php

use yii\db\Migration;

/**
 * Handles the creation of table `column`.
 */
class m180111_014815_create_column_table extends Migration
{
    /**
     * @var string 专栏表
     */
    public $tableName = '{{%column}}';

    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull()->comment('用户'),
            'name' => $this->string()->notNull()->comment('名称'),
            'avatar' => $this->string()->notNull()->comment('头像'),
            'introduction' => $this->text()->notNull()->comment('介绍'),
            'domain' => $this->string()->notNull()->comment('域名'),
            'wechat' => $this->string()->notNull()->comment('微信号'),
            'price' => $this->integer()->notNull()->comment('价格，单位为分'),
            'status' => $this->smallInteger()->defaultValue(1)->comment('状态，1为待审核 2为审核通过'),
            'subscribed_total' => $this->integer()->defaultValue(0)->comment('订阅的人数'),
            'article_total' => $this->integer()->defaultValue(0)->comment('文章的人数'),
            'created_at' => $this->integer()->defaultValue(null),
            'updated_at' => $this->integer()->defaultValue(null),
        ]);
        $this->addCommentOnTable($this->tableName, '专栏表');
        $this->createIndex('fk_user_id', $this->tableName, 'user_id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable($this->tableName);
    }
}

