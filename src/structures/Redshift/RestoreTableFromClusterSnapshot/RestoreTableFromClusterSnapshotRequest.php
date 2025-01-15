<?php

namespace Sunaoka\Aws\Structures\Redshift\RestoreTableFromClusterSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string $SnapshotIdentifier
 * @property string $SourceDatabaseName
 * @property string|null $SourceSchemaName
 * @property string $SourceTableName
 * @property string|null $TargetDatabaseName
 * @property string|null $TargetSchemaName
 * @property string $NewTableName
 * @property bool|null $EnableCaseSensitiveIdentifier
 */
class RestoreTableFromClusterSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     SnapshotIdentifier: string,
     *     SourceDatabaseName: string,
     *     SourceSchemaName?: string|null,
     *     SourceTableName: string,
     *     TargetDatabaseName?: string|null,
     *     TargetSchemaName?: string|null,
     *     NewTableName: string,
     *     EnableCaseSensitiveIdentifier?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
