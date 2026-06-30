<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListIntermediateTables;

trait ListIntermediateTablesTrait
{
    /**
     * @param ListIntermediateTablesRequest $args
     * @return ListIntermediateTablesResponse
     */
    public function listIntermediateTables(ListIntermediateTablesRequest $args)
    {
        $result = parent::listIntermediateTables($args->toArray());
        return new ListIntermediateTablesResponse($result->toArray());
    }
}
