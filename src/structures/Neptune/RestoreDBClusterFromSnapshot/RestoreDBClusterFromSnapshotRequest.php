<?php

namespace Sunaoka\Aws\Structures\Neptune\RestoreDBClusterFromSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $AvailabilityZones
 * @property string $DBClusterIdentifier
 * @property string $SnapshotIdentifier
 * @property string $Engine
 * @property string|null $EngineVersion
 * @property int|null $Port
 * @property string|null $DBSubnetGroupName
 * @property string|null $DatabaseName
 * @property string|null $OptionGroupName
 * @property list<string>|null $VpcSecurityGroupIds
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $KmsKeyId
 * @property bool|null $EnableIAMDatabaseAuthentication
 * @property list<string>|null $EnableCloudwatchLogsExports
 * @property string|null $DBClusterParameterGroupName
 * @property bool|null $DeletionProtection
 * @property bool|null $CopyTagsToSnapshot
 * @property Shapes\ServerlessV2ScalingConfiguration|null $ServerlessV2ScalingConfiguration
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
     *     DatabaseName?: string|null,
     *     OptionGroupName?: string|null,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     KmsKeyId?: string|null,
     *     EnableIAMDatabaseAuthentication?: bool|null,
     *     EnableCloudwatchLogsExports?: list<string>|null,
     *     DBClusterParameterGroupName?: string|null,
     *     DeletionProtection?: bool|null,
     *     CopyTagsToSnapshot?: bool|null,
     *     ServerlessV2ScalingConfiguration?: Shapes\ServerlessV2ScalingConfiguration|null,
     *     StorageType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
