<?php

namespace Sunaoka\Aws\Structures\DocDB\RestoreDBClusterFromSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AvailabilityZones
 * @property string $DBClusterIdentifier
 * @property string $SnapshotIdentifier
 * @property string $Engine
 * @property string $EngineVersion
 * @property int $Port
 * @property string $DBSubnetGroupName
 * @property list<string> $VpcSecurityGroupIds
 * @property list<Shapes\Tag> $Tags
 * @property string $KmsKeyId
 * @property list<string> $EnableCloudwatchLogsExports
 * @property bool $DeletionProtection
 * @property string $DBClusterParameterGroupName
 * @property string $StorageType
 */
class RestoreDBClusterFromSnapshotRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZones?: list<string>,
     *     DBClusterIdentifier: string,
     *     SnapshotIdentifier: string,
     *     Engine: string,
     *     EngineVersion?: string,
     *     Port?: int,
     *     DBSubnetGroupName?: string,
     *     VpcSecurityGroupIds?: list<string>,
     *     Tags?: list<Shapes\Tag>,
     *     KmsKeyId?: string,
     *     EnableCloudwatchLogsExports?: list<string>,
     *     DeletionProtection?: bool,
     *     DBClusterParameterGroupName?: string,
     *     StorageType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
