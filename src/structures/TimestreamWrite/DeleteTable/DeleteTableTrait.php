<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DeleteTable;

trait DeleteTableTrait
{
    /**
     * @param DeleteTableRequest $args
     * @return void
     */
    public function deleteTable(DeleteTableRequest $args)
    {
        parent::deleteTable($args->toArray());
    }
}
