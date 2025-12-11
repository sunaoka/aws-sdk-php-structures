<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteDataTable;

trait DeleteDataTableTrait
{
    /**
     * @param DeleteDataTableRequest $args
     * @return DeleteDataTableResponse
     */
    public function deleteDataTable(DeleteDataTableRequest $args)
    {
        $result = parent::deleteDataTable($args->toArray());
        return new DeleteDataTableResponse($result->toArray());
    }
}
