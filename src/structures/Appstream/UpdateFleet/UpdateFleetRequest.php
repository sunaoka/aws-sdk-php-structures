<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageName
 * @property string $ImageArn
 * @property string $Name
 * @property string $InstanceType
 * @property Shapes\ComputeCapacity $ComputeCapacity
 * @property Shapes\VpcConfig $VpcConfig
 * @property int $MaxUserDurationInSeconds
 * @property int $DisconnectTimeoutInSeconds
 * @property bool $DeleteVpcConfig
 * @property string $Description
 * @property string $DisplayName
 * @property bool $EnableDefaultInternetAccess
 * @property Shapes\DomainJoinInfo $DomainJoinInfo
 * @property int $IdleDisconnectTimeoutInSeconds
 * @property list<'VPC_CONFIGURATION'|'VPC_CONFIGURATION_SECURITY_GROUP_IDS'|'DOMAIN_JOIN_INFO'|'IAM_ROLE_ARN'|'USB_DEVICE_FILTER_STRINGS'|'SESSION_SCRIPT_S3_LOCATION'|'MAX_SESSIONS_PER_INSTANCE'> $AttributesToDelete
 * @property string $IamRoleArn
 * @property 'APP'|'DESKTOP' $StreamView
 * @property 'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8' $Platform
 * @property int $MaxConcurrentSessions
 * @property list<string> $UsbDeviceFilterStrings
 * @property Shapes\S3Location $SessionScriptS3Location
 * @property int $MaxSessionsPerInstance
 */
class UpdateFleetRequest extends Request
{
    /**
     * @param array{
     *     ImageName?: string,
     *     ImageArn?: string,
     *     Name?: string,
     *     InstanceType?: string,
     *     ComputeCapacity?: Shapes\ComputeCapacity,
     *     VpcConfig?: Shapes\VpcConfig,
     *     MaxUserDurationInSeconds?: int,
     *     DisconnectTimeoutInSeconds?: int,
     *     DeleteVpcConfig?: bool,
     *     Description?: string,
     *     DisplayName?: string,
     *     EnableDefaultInternetAccess?: bool,
     *     DomainJoinInfo?: Shapes\DomainJoinInfo,
     *     IdleDisconnectTimeoutInSeconds?: int,
     *     AttributesToDelete?: list<'VPC_CONFIGURATION'|'VPC_CONFIGURATION_SECURITY_GROUP_IDS'|'DOMAIN_JOIN_INFO'|'IAM_ROLE_ARN'|'USB_DEVICE_FILTER_STRINGS'|'SESSION_SCRIPT_S3_LOCATION'|'MAX_SESSIONS_PER_INSTANCE'>,
     *     IamRoleArn?: string,
     *     StreamView?: 'APP'|'DESKTOP',
     *     Platform?: 'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8',
     *     MaxConcurrentSessions?: int,
     *     UsbDeviceFilterStrings?: list<string>,
     *     SessionScriptS3Location?: Shapes\S3Location,
     *     MaxSessionsPerInstance?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
