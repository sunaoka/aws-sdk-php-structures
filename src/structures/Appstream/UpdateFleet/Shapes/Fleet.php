<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property string|null $DisplayName
 * @property string|null $Description
 * @property string|null $ImageName
 * @property string|null $ImageArn
 * @property string $InstanceType
 * @property 'ALWAYS_ON'|'ON_DEMAND'|'ELASTIC'|null $FleetType
 * @property ComputeCapacityStatus $ComputeCapacityStatus
 * @property int|null $MaxUserDurationInSeconds
 * @property int|null $DisconnectTimeoutInSeconds
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED' $State
 * @property VpcConfig|null $VpcConfig
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property list<FleetError>|null $FleetErrors
 * @property bool|null $EnableDefaultInternetAccess
 * @property DomainJoinInfo|null $DomainJoinInfo
 * @property int|null $IdleDisconnectTimeoutInSeconds
 * @property string|null $IamRoleArn
 * @property 'APP'|'DESKTOP'|null $StreamView
 * @property 'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'WINDOWS_SERVER_2025'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8'|'UBUNTU_PRO_2404'|null $Platform
 * @property int|null $MaxConcurrentSessions
 * @property list<string>|null $UsbDeviceFilterStrings
 * @property S3Location|null $SessionScriptS3Location
 * @property int|null $MaxSessionsPerInstance
 * @property VolumeConfig|null $RootVolumeConfig
 */
class Fleet extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Name: string,
     *     DisplayName?: string|null,
     *     Description?: string|null,
     *     ImageName?: string|null,
     *     ImageArn?: string|null,
     *     InstanceType: string,
     *     FleetType?: 'ALWAYS_ON'|'ON_DEMAND'|'ELASTIC'|null,
     *     ComputeCapacityStatus: ComputeCapacityStatus,
     *     MaxUserDurationInSeconds?: int|null,
     *     DisconnectTimeoutInSeconds?: int|null,
     *     State: 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED',
     *     VpcConfig?: VpcConfig|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     FleetErrors?: list<FleetError>|null,
     *     EnableDefaultInternetAccess?: bool|null,
     *     DomainJoinInfo?: DomainJoinInfo|null,
     *     IdleDisconnectTimeoutInSeconds?: int|null,
     *     IamRoleArn?: string|null,
     *     StreamView?: 'APP'|'DESKTOP'|null,
     *     Platform?: 'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'WINDOWS_SERVER_2025'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8'|'UBUNTU_PRO_2404'|null,
     *     MaxConcurrentSessions?: int|null,
     *     UsbDeviceFilterStrings?: list<string>|null,
     *     SessionScriptS3Location?: S3Location|null,
     *     MaxSessionsPerInstance?: int|null,
     *     RootVolumeConfig?: VolumeConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
