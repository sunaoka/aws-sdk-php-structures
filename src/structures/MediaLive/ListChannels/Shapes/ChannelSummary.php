<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property CdiInputSpecification $CdiInputSpecification
 * @property 'STANDARD'|'SINGLE_PIPELINE' $ChannelClass
 * @property list<OutputDestination> $Destinations
 * @property list<ChannelEgressEndpoint> $EgressEndpoints
 * @property string $Id
 * @property list<InputAttachment> $InputAttachments
 * @property InputSpecification $InputSpecification
 * @property 'ERROR'|'WARNING'|'INFO'|'DEBUG'|'DISABLED' $LogLevel
 * @property MaintenanceStatus $Maintenance
 * @property string $Name
 * @property int $PipelinesRunningCount
 * @property string $RoleArn
 * @property 'CREATING'|'CREATE_FAILED'|'IDLE'|'STARTING'|'RUNNING'|'RECOVERING'|'STOPPING'|'DELETING'|'DELETED'|'UPDATING'|'UPDATE_FAILED' $State
 * @property array<string, string> $Tags
 * @property VpcOutputSettingsDescription $Vpc
 * @property DescribeAnywhereSettings $AnywhereSettings
 * @property ChannelEngineVersionResponse $ChannelEngineVersion
 * @property list<ChannelEngineVersionResponse> $UsedChannelEngineVersions
 */
class ChannelSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CdiInputSpecification?: CdiInputSpecification,
     *     ChannelClass?: 'STANDARD'|'SINGLE_PIPELINE',
     *     Destinations?: list<OutputDestination>,
     *     EgressEndpoints?: list<ChannelEgressEndpoint>,
     *     Id?: string,
     *     InputAttachments?: list<InputAttachment>,
     *     InputSpecification?: InputSpecification,
     *     LogLevel?: 'ERROR'|'WARNING'|'INFO'|'DEBUG'|'DISABLED',
     *     Maintenance?: MaintenanceStatus,
     *     Name?: string,
     *     PipelinesRunningCount?: int,
     *     RoleArn?: string,
     *     State?: 'CREATING'|'CREATE_FAILED'|'IDLE'|'STARTING'|'RUNNING'|'RECOVERING'|'STOPPING'|'DELETING'|'DELETED'|'UPDATING'|'UPDATE_FAILED',
     *     Tags?: array<string, string>,
     *     Vpc?: VpcOutputSettingsDescription,
     *     AnywhereSettings?: DescribeAnywhereSettings,
     *     ChannelEngineVersion?: ChannelEngineVersionResponse,
     *     UsedChannelEngineVersions?: list<ChannelEngineVersionResponse>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
