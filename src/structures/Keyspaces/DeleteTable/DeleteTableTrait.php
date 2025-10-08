<?php

namespace Sunaoka\Aws\Structures\Keyspaces\DeleteTable;

trait DeleteTableTrait
{
    /**
     * @param DeleteTableRequest $args
     * @return DeleteTableResponse
     */
    public function deleteTable(DeleteTableRequest $args)
    {
        $result = parent::deleteTable($args->toArray());
        return new DeleteTableResponse($result->toArray());
    }
}
