<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListConfiguredTables;

trait ListConfiguredTablesTrait
{
    /**
     * @param ListConfiguredTablesRequest $args
     * @return ListConfiguredTablesResponse
     */
    public function listConfiguredTables(ListConfiguredTablesRequest $args)
    {
        $result = parent::listConfiguredTables($args->toArray());
        return new ListConfiguredTablesResponse($result->toArray());
    }
}
