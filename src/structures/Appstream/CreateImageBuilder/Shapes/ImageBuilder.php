<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateImageBuilder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $ImageArn
 * @property string $Description
 * @property string $DisplayName
 * @property VpcConfig $VpcConfig
 * @property string $InstanceType
 * @property 'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8' $Platform
 * @property string $IamRoleArn
 * @property 'PENDING'|'UPDATING_AGENT'|'RUNNING'|'STOPPING'|'STOPPED'|'REBOOTING'|'SNAPSHOTTING'|'DELETING'|'FAILED'|'UPDATING'|'PENDING_QUALIFICATION' $State
 * @property ImageBuilderStateChangeReason $StateChangeReason
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property bool $EnableDefaultInternetAccess
 * @property DomainJoinInfo $DomainJoinInfo
 * @property NetworkAccessConfiguration $NetworkAccessConfiguration
 * @property list<ResourceError> $ImageBuilderErrors
 * @property string $AppstreamAgentVersion
 * @property list<AccessEndpoint> $AccessEndpoints
 * @property 'TRUE'|'FALSE' $LatestAppstreamAgentVersion
 */
class ImageBuilder extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Arn?: string,
     *     ImageArn?: string,
     *     Description?: string,
     *     DisplayName?: string,
     *     VpcConfig?: VpcConfig,
     *     InstanceType?: string,
     *     Platform?: 'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8',
     *     IamRoleArn?: string,
     *     State?: 'PENDING'|'UPDATING_AGENT'|'RUNNING'|'STOPPING'|'STOPPED'|'REBOOTING'|'SNAPSHOTTING'|'DELETING'|'FAILED'|'UPDATING'|'PENDING_QUALIFICATION',
     *     StateChangeReason?: ImageBuilderStateChangeReason,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     EnableDefaultInternetAccess?: bool,
     *     DomainJoinInfo?: DomainJoinInfo,
     *     NetworkAccessConfiguration?: NetworkAccessConfiguration,
     *     ImageBuilderErrors?: list<ResourceError>,
     *     AppstreamAgentVersion?: string,
     *     AccessEndpoints?: list<AccessEndpoint>,
     *     LatestAppstreamAgentVersion?: 'TRUE'|'FALSE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
