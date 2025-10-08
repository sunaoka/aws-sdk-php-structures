<?php

namespace Sunaoka\Aws\Structures\S3Tables\DeleteTable;

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
