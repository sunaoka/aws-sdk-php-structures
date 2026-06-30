<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetIntermediateTable;

trait GetIntermediateTableTrait
{
    /**
     * @param GetIntermediateTableRequest $args
     * @return GetIntermediateTableResponse
     */
    public function getIntermediateTable(GetIntermediateTableRequest $args)
    {
        $result = parent::getIntermediateTable($args->toArray());
        return new GetIntermediateTableResponse($result->toArray());
    }
}
