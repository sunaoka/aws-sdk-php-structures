<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property Shapes\CdiInputSpecification|null $CdiInputSpecification
 * @property 'STANDARD'|'SINGLE_PIPELINE'|null $ChannelClass
 * @property list<Shapes\OutputDestination>|null $Destinations
 * @property list<Shapes\ChannelEgressEndpoint>|null $EgressEndpoints
 * @property Shapes\EncoderSettings|null $EncoderSettings
 * @property string|null $Id
 * @property list<Shapes\InputAttachment>|null $InputAttachments
 * @property Shapes\InputSpecification|null $InputSpecification
 * @property 'ERROR'|'WARNING'|'INFO'|'DEBUG'|'DISABLED'|null $LogLevel
 * @property Shapes\MaintenanceStatus|null $Maintenance
 * @property string|null $MaintenanceStatus
 * @property string|null $Name
 * @property list<Shapes\PipelineDetail>|null $PipelineDetails
 * @property int|null $PipelinesRunningCount
 * @property string|null $RoleArn
 * @property 'CREATING'|'CREATE_FAILED'|'IDLE'|'STARTING'|'RUNNING'|'RECOVERING'|'STOPPING'|'DELETING'|'DELETED'|'UPDATING'|'UPDATE_FAILED'|null $State
 * @property array<string, string>|null $Tags
 * @property Shapes\VpcOutputSettingsDescription|null $Vpc
 * @property Shapes\DescribeAnywhereSettings|null $AnywhereSettings
 * @property Shapes\ChannelEngineVersionResponse|null $ChannelEngineVersion
 * @property Shapes\DescribeLinkedChannelSettings|null $LinkedChannelSettings
 */
class RestartChannelPipelinesResponse extends Response
{
}
