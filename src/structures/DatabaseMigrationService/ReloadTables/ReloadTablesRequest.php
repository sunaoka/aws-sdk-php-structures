<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ReloadTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationTaskArn
 * @property list<Shapes\TableToReload> $TablesToReload
 * @property 'data-reload'|'validate-only' $ReloadOption
 */
class ReloadTablesRequest extends Request
{
    /**
     * @param array{
     *     ReplicationTaskArn: string,
     *     TablesToReload: list<Shapes\TableToReload>,
     *     ReloadOption?: 'data-reload'|'validate-only'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
