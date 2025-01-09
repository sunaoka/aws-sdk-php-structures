<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $ImageName
 * @property string $ImageArn
 * @property string $InstanceType
 * @property 'ALWAYS_ON'|'ON_DEMAND'|'ELASTIC' $FleetType
 * @property Shapes\ComputeCapacity $ComputeCapacity
 * @property Shapes\VpcConfig $VpcConfig
 * @property int $MaxUserDurationInSeconds
 * @property int $DisconnectTimeoutInSeconds
 * @property string $Description
 * @property string $DisplayName
 * @property bool $EnableDefaultInternetAccess
 * @property Shapes\DomainJoinInfo $DomainJoinInfo
 * @property array<string, string> $Tags
 * @property int $IdleDisconnectTimeoutInSeconds
 * @property string $IamRoleArn
 * @property 'APP'|'DESKTOP' $StreamView
 * @property 'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8' $Platform
 * @property int $MaxConcurrentSessions
 * @property list<string> $UsbDeviceFilterStrings
 * @property Shapes\S3Location $SessionScriptS3Location
 * @property int $MaxSessionsPerInstance
 */
class CreateFleetRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ImageName?: string,
     *     ImageArn?: string,
     *     InstanceType: string,
     *     FleetType?: 'ALWAYS_ON'|'ON_DEMAND'|'ELASTIC',
     *     ComputeCapacity?: Shapes\ComputeCapacity,
     *     VpcConfig?: Shapes\VpcConfig,
     *     MaxUserDurationInSeconds?: int,
     *     DisconnectTimeoutInSeconds?: int,
     *     Description?: string,
     *     DisplayName?: string,
     *     EnableDefaultInternetAccess?: bool,
     *     DomainJoinInfo?: Shapes\DomainJoinInfo,
     *     Tags?: array<string, string>,
     *     IdleDisconnectTimeoutInSeconds?: int,
     *     IamRoleArn?: string,
     *     StreamView?: 'APP'|'DESKTOP',
     *     Platform?: 'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8',
     *     MaxConcurrentSessions?: int,
     *     UsbDeviceFilterStrings?: list<string>,
     *     SessionScriptS3Location?: Shapes\S3Location,
     *     MaxSessionsPerInstance?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
