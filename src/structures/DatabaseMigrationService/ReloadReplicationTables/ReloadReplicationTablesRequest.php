<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ReloadReplicationTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationConfigArn
 * @property list<Shapes\TableToReload> $TablesToReload
 * @property 'data-reload'|'validate-only' $ReloadOption
 */
class ReloadReplicationTablesRequest extends Request
{
    /**
     * @param array{
     *     ReplicationConfigArn: string,
     *     TablesToReload: list<Shapes\TableToReload>,
     *     ReloadOption?: 'data-reload'|'validate-only'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
