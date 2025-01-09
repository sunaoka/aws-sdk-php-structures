<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $DisplayName
 * @property string $Description
 * @property string $ImageName
 * @property string $ImageArn
 * @property string $InstanceType
 * @property 'ALWAYS_ON'|'ON_DEMAND'|'ELASTIC' $FleetType
 * @property ComputeCapacityStatus $ComputeCapacityStatus
 * @property int $MaxUserDurationInSeconds
 * @property int $DisconnectTimeoutInSeconds
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED' $State
 * @property VpcConfig $VpcConfig
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property list<FleetError> $FleetErrors
 * @property bool $EnableDefaultInternetAccess
 * @property DomainJoinInfo $DomainJoinInfo
 * @property int $IdleDisconnectTimeoutInSeconds
 * @property string $IamRoleArn
 * @property 'APP'|'DESKTOP' $StreamView
 * @property 'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8' $Platform
 * @property int $MaxConcurrentSessions
 * @property list<string> $UsbDeviceFilterStrings
 * @property S3Location $SessionScriptS3Location
 * @property int $MaxSessionsPerInstance
 */
class Fleet extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Name: string,
     *     DisplayName?: string,
     *     Description?: string,
     *     ImageName?: string,
     *     ImageArn?: string,
     *     InstanceType: string,
     *     FleetType?: 'ALWAYS_ON'|'ON_DEMAND'|'ELASTIC',
     *     ComputeCapacityStatus: ComputeCapacityStatus,
     *     MaxUserDurationInSeconds?: int,
     *     DisconnectTimeoutInSeconds?: int,
     *     State: 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED',
     *     VpcConfig?: VpcConfig,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     FleetErrors?: list<FleetError>,
     *     EnableDefaultInternetAccess?: bool,
     *     DomainJoinInfo?: DomainJoinInfo,
     *     IdleDisconnectTimeoutInSeconds?: int,
     *     IamRoleArn?: string,
     *     StreamView?: 'APP'|'DESKTOP',
     *     Platform?: 'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8',
     *     MaxConcurrentSessions?: int,
     *     UsbDeviceFilterStrings?: list<string>,
     *     SessionScriptS3Location?: S3Location,
     *     MaxSessionsPerInstance?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
