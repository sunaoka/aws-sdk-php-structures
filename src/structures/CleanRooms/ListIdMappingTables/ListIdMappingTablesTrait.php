<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListIdMappingTables;

trait ListIdMappingTablesTrait
{
    /**
     * @param ListIdMappingTablesRequest $args
     * @return ListIdMappingTablesResponse
     */
    public function listIdMappingTables(ListIdMappingTablesRequest $args)
    {
        $result = parent::listIdMappingTables($args->toArray());
        return new ListIdMappingTablesResponse($result->toArray());
    }
}
