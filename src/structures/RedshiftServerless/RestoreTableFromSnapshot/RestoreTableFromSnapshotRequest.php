<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\RestoreTableFromSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $activateCaseSensitiveIdentifier
 * @property string $namespaceName
 * @property string $newTableName
 * @property string $snapshotName
 * @property string $sourceDatabaseName
 * @property string $sourceSchemaName
 * @property string $sourceTableName
 * @property string $targetDatabaseName
 * @property string $targetSchemaName
 * @property string $workgroupName
 */
class RestoreTableFromSnapshotRequest extends Request
{
    /**
     * @param array{
     *     activateCaseSensitiveIdentifier?: bool,
     *     namespaceName: string,
     *     newTableName: string,
     *     snapshotName: string,
     *     sourceDatabaseName: string,
     *     sourceSchemaName?: string,
     *     sourceTableName: string,
     *     targetDatabaseName?: string,
     *     targetSchemaName?: string,
     *     workgroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
