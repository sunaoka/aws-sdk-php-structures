<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property CdiInputSpecification|null $CdiInputSpecification
 * @property 'STANDARD'|'SINGLE_PIPELINE'|null $ChannelClass
 * @property list<OutputDestination>|null $Destinations
 * @property list<ChannelEgressEndpoint>|null $EgressEndpoints
 * @property EncoderSettings|null $EncoderSettings
 * @property string|null $Id
 * @property list<InputAttachment>|null $InputAttachments
 * @property InputSpecification|null $InputSpecification
 * @property 'ERROR'|'WARNING'|'INFO'|'DEBUG'|'DISABLED'|null $LogLevel
 * @property MaintenanceStatus|null $Maintenance
 * @property string|null $Name
 * @property list<PipelineDetail>|null $PipelineDetails
 * @property int|null $PipelinesRunningCount
 * @property string|null $RoleArn
 * @property 'CREATING'|'CREATE_FAILED'|'IDLE'|'STARTING'|'RUNNING'|'RECOVERING'|'STOPPING'|'DELETING'|'DELETED'|'UPDATING'|'UPDATE_FAILED'|null $State
 * @property array<string, string>|null $Tags
 * @property VpcOutputSettingsDescription|null $Vpc
 * @property DescribeAnywhereSettings|null $AnywhereSettings
 * @property ChannelEngineVersionResponse|null $ChannelEngineVersion
 * @property DescribeLinkedChannelSettings|null $LinkedChannelSettings
 * @property list<string>|null $ChannelSecurityGroups
 */
class Channel extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CdiInputSpecification?: CdiInputSpecification|null,
     *     ChannelClass?: 'STANDARD'|'SINGLE_PIPELINE'|null,
     *     Destinations?: list<OutputDestination>|null,
     *     EgressEndpoints?: list<ChannelEgressEndpoint>|null,
     *     EncoderSettings?: EncoderSettings|null,
     *     Id?: string|null,
     *     InputAttachments?: list<InputAttachment>|null,
     *     InputSpecification?: InputSpecification|null,
     *     LogLevel?: 'ERROR'|'WARNING'|'INFO'|'DEBUG'|'DISABLED'|null,
     *     Maintenance?: MaintenanceStatus|null,
     *     Name?: string|null,
     *     PipelineDetails?: list<PipelineDetail>|null,
     *     PipelinesRunningCount?: int|null,
     *     RoleArn?: string|null,
     *     State?: 'CREATING'|'CREATE_FAILED'|'IDLE'|'STARTING'|'RUNNING'|'RECOVERING'|'STOPPING'|'DELETING'|'DELETED'|'UPDATING'|'UPDATE_FAILED'|null,
     *     Tags?: array<string, string>|null,
     *     Vpc?: VpcOutputSettingsDescription|null,
     *     AnywhereSettings?: DescribeAnywhereSettings|null,
     *     ChannelEngineVersion?: ChannelEngineVersionResponse|null,
     *     LinkedChannelSettings?: DescribeLinkedChannelSettings|null,
     *     ChannelSecurityGroups?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
