<?php

namespace Sunaoka\Aws\Structures\Neptune\RestoreDBClusterToPointInTime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property string|null $RestoreType
 * @property string $SourceDBClusterIdentifier
 * @property \Aws\Api\DateTimeResult|null $RestoreToTime
 * @property bool|null $UseLatestRestorableTime
 * @property int|null $Port
 * @property string|null $DBSubnetGroupName
 * @property string|null $OptionGroupName
 * @property list<string>|null $VpcSecurityGroupIds
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $KmsKeyId
 * @property bool|null $EnableIAMDatabaseAuthentication
 * @property list<string>|null $EnableCloudwatchLogsExports
 * @property string|null $DBClusterParameterGroupName
 * @property bool|null $DeletionProtection
 * @property Shapes\ServerlessV2ScalingConfiguration|null $ServerlessV2ScalingConfiguration
 * @property string|null $StorageType
 */
class RestoreDBClusterToPointInTimeRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier: string,
     *     RestoreType?: string|null,
     *     SourceDBClusterIdentifier: string,
     *     RestoreToTime?: \Aws\Api\DateTimeResult|null,
     *     UseLatestRestorableTime?: bool|null,
     *     Port?: int|null,
     *     DBSubnetGroupName?: string|null,
     *     OptionGroupName?: string|null,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     KmsKeyId?: string|null,
     *     EnableIAMDatabaseAuthentication?: bool|null,
     *     EnableCloudwatchLogsExports?: list<string>|null,
     *     DBClusterParameterGroupName?: string|null,
     *     DeletionProtection?: bool|null,
     *     ServerlessV2ScalingConfiguration?: Shapes\ServerlessV2ScalingConfiguration|null,
     *     StorageType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
