<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ImageName
 * @property string|null $ImageArn
 * @property string|null $Name
 * @property string|null $InstanceType
 * @property Shapes\ComputeCapacity|null $ComputeCapacity
 * @property Shapes\VpcConfig|null $VpcConfig
 * @property int|null $MaxUserDurationInSeconds
 * @property int|null $DisconnectTimeoutInSeconds
 * @property bool|null $DeleteVpcConfig
 * @property string|null $Description
 * @property string|null $DisplayName
 * @property bool|null $EnableDefaultInternetAccess
 * @property Shapes\DomainJoinInfo|null $DomainJoinInfo
 * @property int|null $IdleDisconnectTimeoutInSeconds
 * @property list<'VPC_CONFIGURATION'|'VPC_CONFIGURATION_SECURITY_GROUP_IDS'|'DOMAIN_JOIN_INFO'|'IAM_ROLE_ARN'|'USB_DEVICE_FILTER_STRINGS'|'SESSION_SCRIPT_S3_LOCATION'|'MAX_SESSIONS_PER_INSTANCE'|'VOLUME_CONFIGURATION'>|null $AttributesToDelete
 * @property string|null $IamRoleArn
 * @property 'APP'|'DESKTOP'|null $StreamView
 * @property 'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8'|null $Platform
 * @property int|null $MaxConcurrentSessions
 * @property list<string>|null $UsbDeviceFilterStrings
 * @property Shapes\S3Location|null $SessionScriptS3Location
 * @property int|null $MaxSessionsPerInstance
 * @property Shapes\VolumeConfig|null $RootVolumeConfig
 */
class UpdateFleetRequest extends Request
{
    /**
     * @param array{
     *     ImageName?: string|null,
     *     ImageArn?: string|null,
     *     Name?: string|null,
     *     InstanceType?: string|null,
     *     ComputeCapacity?: Shapes\ComputeCapacity|null,
     *     VpcConfig?: Shapes\VpcConfig|null,
     *     MaxUserDurationInSeconds?: int|null,
     *     DisconnectTimeoutInSeconds?: int|null,
     *     DeleteVpcConfig?: bool|null,
     *     Description?: string|null,
     *     DisplayName?: string|null,
     *     EnableDefaultInternetAccess?: bool|null,
     *     DomainJoinInfo?: Shapes\DomainJoinInfo|null,
     *     IdleDisconnectTimeoutInSeconds?: int|null,
     *     AttributesToDelete?: list<'VPC_CONFIGURATION'|'VPC_CONFIGURATION_SECURITY_GROUP_IDS'|'DOMAIN_JOIN_INFO'|'IAM_ROLE_ARN'|'USB_DEVICE_FILTER_STRINGS'|'SESSION_SCRIPT_S3_LOCATION'|'MAX_SESSIONS_PER_INSTANCE'|'VOLUME_CONFIGURATION'>|null,
     *     IamRoleArn?: string|null,
     *     StreamView?: 'APP'|'DESKTOP'|null,
     *     Platform?: 'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8'|null,
     *     MaxConcurrentSessions?: int|null,
     *     UsbDeviceFilterStrings?: list<string>|null,
     *     SessionScriptS3Location?: Shapes\S3Location|null,
     *     MaxSessionsPerInstance?: int|null,
     *     RootVolumeConfig?: Shapes\VolumeConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
