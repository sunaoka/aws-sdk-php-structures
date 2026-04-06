<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $ImageName
 * @property string|null $ImageArn
 * @property string $InstanceType
 * @property 'ALWAYS_ON'|'ON_DEMAND'|'ELASTIC'|null $FleetType
 * @property Shapes\ComputeCapacity|null $ComputeCapacity
 * @property Shapes\VpcConfig|null $VpcConfig
 * @property int|null $MaxUserDurationInSeconds
 * @property int|null $DisconnectTimeoutInSeconds
 * @property string|null $Description
 * @property string|null $DisplayName
 * @property bool|null $EnableDefaultInternetAccess
 * @property Shapes\DomainJoinInfo|null $DomainJoinInfo
 * @property array<string, string>|null $Tags
 * @property int|null $IdleDisconnectTimeoutInSeconds
 * @property string|null $IamRoleArn
 * @property 'APP'|'DESKTOP'|null $StreamView
 * @property 'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'WINDOWS_SERVER_2025'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8'|'UBUNTU_PRO_2404'|null $Platform
 * @property int|null $MaxConcurrentSessions
 * @property list<string>|null $UsbDeviceFilterStrings
 * @property Shapes\S3Location|null $SessionScriptS3Location
 * @property int|null $MaxSessionsPerInstance
 * @property Shapes\VolumeConfig|null $RootVolumeConfig
 * @property bool|null $DisableIMDSV1
 */
class CreateFleetRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ImageName?: string|null,
     *     ImageArn?: string|null,
     *     InstanceType: string,
     *     FleetType?: 'ALWAYS_ON'|'ON_DEMAND'|'ELASTIC'|null,
     *     ComputeCapacity?: Shapes\ComputeCapacity|null,
     *     VpcConfig?: Shapes\VpcConfig|null,
     *     MaxUserDurationInSeconds?: int|null,
     *     DisconnectTimeoutInSeconds?: int|null,
     *     Description?: string|null,
     *     DisplayName?: string|null,
     *     EnableDefaultInternetAccess?: bool|null,
     *     DomainJoinInfo?: Shapes\DomainJoinInfo|null,
     *     Tags?: array<string, string>|null,
     *     IdleDisconnectTimeoutInSeconds?: int|null,
     *     IamRoleArn?: string|null,
     *     StreamView?: 'APP'|'DESKTOP'|null,
     *     Platform?: 'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'WINDOWS_SERVER_2025'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8'|'UBUNTU_PRO_2404'|null,
     *     MaxConcurrentSessions?: int|null,
     *     UsbDeviceFilterStrings?: list<string>|null,
     *     SessionScriptS3Location?: Shapes\S3Location|null,
     *     MaxSessionsPerInstance?: int|null,
     *     RootVolumeConfig?: Shapes\VolumeConfig|null,
     *     DisableIMDSV1?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
