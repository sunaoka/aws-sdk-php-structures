<?php

namespace Sunaoka\Aws\Structures\Neptune\RestoreDBClusterToPointInTime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property string $RestoreType
 * @property string $SourceDBClusterIdentifier
 * @property \Aws\Api\DateTimeResult $RestoreToTime
 * @property bool $UseLatestRestorableTime
 * @property int $Port
 * @property string $DBSubnetGroupName
 * @property string $OptionGroupName
 * @property list<string> $VpcSecurityGroupIds
 * @property list<Shapes\Tag> $Tags
 * @property string $KmsKeyId
 * @property bool $EnableIAMDatabaseAuthentication
 * @property list<string> $EnableCloudwatchLogsExports
 * @property string $DBClusterParameterGroupName
 * @property bool $DeletionProtection
 * @property Shapes\ServerlessV2ScalingConfiguration $ServerlessV2ScalingConfiguration
 * @property string $StorageType
 */
class RestoreDBClusterToPointInTimeRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier: string,
     *     RestoreType?: string,
     *     SourceDBClusterIdentifier: string,
     *     RestoreToTime?: \Aws\Api\DateTimeResult,
     *     UseLatestRestorableTime?: bool,
     *     Port?: int,
     *     DBSubnetGroupName?: string,
     *     OptionGroupName?: string,
     *     VpcSecurityGroupIds?: list<string>,
     *     Tags?: list<Shapes\Tag>,
     *     KmsKeyId?: string,
     *     EnableIAMDatabaseAuthentication?: bool,
     *     EnableCloudwatchLogsExports?: list<string>,
     *     DBClusterParameterGroupName?: string,
     *     DeletionProtection?: bool,
     *     ServerlessV2ScalingConfiguration?: Shapes\ServerlessV2ScalingConfiguration,
     *     StorageType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
