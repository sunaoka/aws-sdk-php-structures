<?php

namespace Sunaoka\Aws\Structures\Neptune\RestoreDBClusterFromSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AvailabilityZones
 * @property string $DBClusterIdentifier
 * @property string $SnapshotIdentifier
 * @property string $Engine
 * @property string $EngineVersion
 * @property int $Port
 * @property string $DBSubnetGroupName
 * @property string $DatabaseName
 * @property string $OptionGroupName
 * @property list<string> $VpcSecurityGroupIds
 * @property list<Shapes\Tag> $Tags
 * @property string $KmsKeyId
 * @property bool $EnableIAMDatabaseAuthentication
 * @property list<string> $EnableCloudwatchLogsExports
 * @property string $DBClusterParameterGroupName
 * @property bool $DeletionProtection
 * @property bool $CopyTagsToSnapshot
 * @property Shapes\ServerlessV2ScalingConfiguration $ServerlessV2ScalingConfiguration
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
     *     DatabaseName?: string,
     *     OptionGroupName?: string,
     *     VpcSecurityGroupIds?: list<string>,
     *     Tags?: list<Shapes\Tag>,
     *     KmsKeyId?: string,
     *     EnableIAMDatabaseAuthentication?: bool,
     *     EnableCloudwatchLogsExports?: list<string>,
     *     DBClusterParameterGroupName?: string,
     *     DeletionProtection?: bool,
     *     CopyTagsToSnapshot?: bool,
     *     ServerlessV2ScalingConfiguration?: Shapes\ServerlessV2ScalingConfiguration,
     *     StorageType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
