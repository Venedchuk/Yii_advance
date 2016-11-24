<?php

use yii\db\Migration;

/**
 * Handles adding position to table `post`.
 */
class m161123_210538_add_position_column_to_post_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('post', 'name', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('post', 'name');
    }
}
