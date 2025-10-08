<?php

namespace Sunaoka\Aws\Structures\DynamoDb\CreateTable;

trait CreateTableTrait
{
    /**
     * @param CreateTableRequest $args
     * @return CreateTableResponse
     */
    public function createTable(CreateTableRequest $args)
    {
        $result = parent::createTable($args->toArray());
        return new CreateTableResponse($result->toArray());
    }
}
