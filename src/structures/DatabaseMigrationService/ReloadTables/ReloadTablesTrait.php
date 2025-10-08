<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ReloadTables;

trait ReloadTablesTrait
{
    /**
     * @param ReloadTablesRequest $args
     * @return ReloadTablesResponse
     */
    public function reloadTables(ReloadTablesRequest $args)
    {
        $result = parent::reloadTables($args->toArray());
        return new ReloadTablesResponse($result->toArray());
    }
}
