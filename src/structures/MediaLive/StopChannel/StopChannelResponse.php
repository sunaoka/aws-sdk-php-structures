<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property Shapes\CdiInputSpecification $CdiInputSpecification
 * @property 'STANDARD'|'SINGLE_PIPELINE' $ChannelClass
 * @property list<Shapes\OutputDestination> $Destinations
 * @property list<Shapes\ChannelEgressEndpoint> $EgressEndpoints
 * @property Shapes\EncoderSettings $EncoderSettings
 * @property string $Id
 * @property list<Shapes\InputAttachment> $InputAttachments
 * @property Shapes\InputSpecification $InputSpecification
 * @property 'ERROR'|'WARNING'|'INFO'|'DEBUG'|'DISABLED' $LogLevel
 * @property Shapes\MaintenanceStatus $Maintenance
 * @property string $Name
 * @property list<Shapes\PipelineDetail> $PipelineDetails
 * @property int $PipelinesRunningCount
 * @property string $RoleArn
 * @property 'CREATING'|'CREATE_FAILED'|'IDLE'|'STARTING'|'RUNNING'|'RECOVERING'|'STOPPING'|'DELETING'|'DELETED'|'UPDATING'|'UPDATE_FAILED' $State
 * @property array<string, string> $Tags
 * @property Shapes\VpcOutputSettingsDescription $Vpc
 * @property Shapes\DescribeAnywhereSettings $AnywhereSettings
 * @property Shapes\ChannelEngineVersionResponse $ChannelEngineVersion
 */
class StopChannelResponse extends Response
{
}
