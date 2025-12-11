<?php

namespace Sunaoka\Aws\Structures\Connect\CreateDataTable;

trait CreateDataTableTrait
{
    /**
     * @param CreateDataTableRequest $args
     * @return CreateDataTableResponse
     */
    public function createDataTable(CreateDataTableRequest $args)
    {
        $result = parent::createDataTable($args->toArray());
        return new CreateDataTableResponse($result->toArray());
    }
}
