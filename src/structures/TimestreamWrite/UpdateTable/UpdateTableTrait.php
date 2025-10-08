<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\UpdateTable;

trait UpdateTableTrait
{
    /**
     * @param UpdateTableRequest $args
     * @return UpdateTableResponse
     */
    public function updateTable(UpdateTableRequest $args)
    {
        $result = parent::updateTable($args->toArray());
        return new UpdateTableResponse($result->toArray());
    }
}
