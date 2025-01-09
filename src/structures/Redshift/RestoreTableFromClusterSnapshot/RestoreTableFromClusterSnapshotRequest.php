<?php

namespace Sunaoka\Aws\Structures\Redshift\RestoreTableFromClusterSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string $SnapshotIdentifier
 * @property string $SourceDatabaseName
 * @property string $SourceSchemaName
 * @property string $SourceTableName
 * @property string $TargetDatabaseName
 * @property string $TargetSchemaName
 * @property string $NewTableName
 * @property bool $EnableCaseSensitiveIdentifier
 */
class RestoreTableFromClusterSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     SnapshotIdentifier: string,
     *     SourceDatabaseName: string,
     *     SourceSchemaName?: string,
     *     SourceTableName: string,
     *     TargetDatabaseName?: string,
     *     TargetSchemaName?: string,
     *     NewTableName: string,
     *     EnableCaseSensitiveIdentifier?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
