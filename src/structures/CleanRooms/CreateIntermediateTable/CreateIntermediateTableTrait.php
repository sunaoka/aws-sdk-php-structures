<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateIntermediateTable;

trait CreateIntermediateTableTrait
{
    /**
     * @param CreateIntermediateTableRequest $args
     * @return CreateIntermediateTableResponse
     */
    public function createIntermediateTable(CreateIntermediateTableRequest $args)
    {
        $result = parent::createIntermediateTable($args->toArray());
        return new CreateIntermediateTableResponse($result->toArray());
    }
}
