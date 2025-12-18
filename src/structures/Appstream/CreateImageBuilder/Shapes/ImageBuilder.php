<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateImageBuilder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Arn
 * @property string|null $ImageArn
 * @property string|null $Description
 * @property string|null $DisplayName
 * @property VpcConfig|null $VpcConfig
 * @property string|null $InstanceType
 * @property 'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'WINDOWS_SERVER_2025'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8'|'UBUNTU_PRO_2404'|null $Platform
 * @property string|null $IamRoleArn
 * @property 'PENDING'|'UPDATING_AGENT'|'RUNNING'|'STOPPING'|'STOPPED'|'REBOOTING'|'SNAPSHOTTING'|'DELETING'|'FAILED'|'UPDATING'|'PENDING_QUALIFICATION'|'PENDING_SYNCING_APPS'|'SYNCING_APPS'|'PENDING_IMAGE_IMPORT'|null $State
 * @property ImageBuilderStateChangeReason|null $StateChangeReason
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property bool|null $EnableDefaultInternetAccess
 * @property DomainJoinInfo|null $DomainJoinInfo
 * @property NetworkAccessConfiguration|null $NetworkAccessConfiguration
 * @property list<ResourceError>|null $ImageBuilderErrors
 * @property string|null $AppstreamAgentVersion
 * @property list<AccessEndpoint>|null $AccessEndpoints
 * @property VolumeConfig|null $RootVolumeConfig
 * @property 'TRUE'|'FALSE'|null $LatestAppstreamAgentVersion
 */
class ImageBuilder extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Arn?: string|null,
     *     ImageArn?: string|null,
     *     Description?: string|null,
     *     DisplayName?: string|null,
     *     VpcConfig?: VpcConfig|null,
     *     InstanceType?: string|null,
     *     Platform?: 'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'WINDOWS_SERVER_2025'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8'|'UBUNTU_PRO_2404'|null,
     *     IamRoleArn?: string|null,
     *     State?: 'PENDING'|'UPDATING_AGENT'|'RUNNING'|'STOPPING'|'STOPPED'|'REBOOTING'|'SNAPSHOTTING'|'DELETING'|'FAILED'|'UPDATING'|'PENDING_QUALIFICATION'|'PENDING_SYNCING_APPS'|'SYNCING_APPS'|'PENDING_IMAGE_IMPORT'|null,
     *     StateChangeReason?: ImageBuilderStateChangeReason|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     EnableDefaultInternetAccess?: bool|null,
     *     DomainJoinInfo?: DomainJoinInfo|null,
     *     NetworkAccessConfiguration?: NetworkAccessConfiguration|null,
     *     ImageBuilderErrors?: list<ResourceError>|null,
     *     AppstreamAgentVersion?: string|null,
     *     AccessEndpoints?: list<AccessEndpoint>|null,
     *     RootVolumeConfig?: VolumeConfig|null,
     *     LatestAppstreamAgentVersion?: 'TRUE'|'FALSE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
