<?php

namespace Sunaoka\Aws\Structures\DynamoDb\CreateGlobalTable;

trait CreateGlobalTableTrait
{
    /**
     * @param CreateGlobalTableRequest $args
     * @return CreateGlobalTableResponse
     */
    public function createGlobalTable(CreateGlobalTableRequest $args)
    {
        $result = parent::createGlobalTable($args->toArray());
        return new CreateGlobalTableResponse($result->toArray());
    }
}
