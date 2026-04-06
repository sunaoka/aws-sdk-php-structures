<?php

namespace Sunaoka\Aws\Structures\DocDB\RestoreDBClusterFromSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $AvailabilityZones
 * @property string $DBClusterIdentifier
 * @property string $SnapshotIdentifier
 * @property string $Engine
 * @property string|null $EngineVersion
 * @property int|null $Port
 * @property string|null $DBSubnetGroupName
 * @property list<string>|null $VpcSecurityGroupIds
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $KmsKeyId
 * @property list<string>|null $EnableCloudwatchLogsExports
 * @property bool|null $DeletionProtection
 * @property string|null $DBClusterParameterGroupName
 * @property string|null $StorageType
 */
class RestoreDBClusterFromSnapshotRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZones?: list<string>|null,
     *     DBClusterIdentifier: string,
     *     SnapshotIdentifier: string,
     *     Engine: string,
     *     EngineVersion?: string|null,
     *     Port?: int|null,
     *     DBSubnetGroupName?: string|null,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     KmsKeyId?: string|null,
     *     EnableCloudwatchLogsExports?: list<string>|null,
     *     DeletionProtection?: bool|null,
     *     DBClusterParameterGroupName?: string|null,
     *     StorageType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
