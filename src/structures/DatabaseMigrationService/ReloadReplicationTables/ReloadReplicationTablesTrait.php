<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ReloadReplicationTables;

trait ReloadReplicationTablesTrait
{
    /**
     * @param ReloadReplicationTablesRequest $args
     * @return ReloadReplicationTablesResponse
     */
    public function reloadReplicationTables(ReloadReplicationTablesRequest $args)
    {
        $result = parent::reloadReplicationTables($args->toArray());
        return new ReloadReplicationTablesResponse($result->toArray());
    }
}
