<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateGlobalTable;

trait UpdateGlobalTableTrait
{
    /**
     * @param UpdateGlobalTableRequest $args
     * @return UpdateGlobalTableResponse
     */
    public function updateGlobalTable(UpdateGlobalTableRequest $args)
    {
        $result = parent::updateGlobalTable($args->toArray());
        return new UpdateGlobalTableResponse($result->toArray());
    }
}
