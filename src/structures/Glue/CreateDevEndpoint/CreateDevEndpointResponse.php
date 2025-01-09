<?php

namespace Sunaoka\Aws\Structures\Glue\CreateDevEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EndpointName
 * @property string $Status
 * @property list<string> $SecurityGroupIds
 * @property string $SubnetId
 * @property string $RoleArn
 * @property string $YarnEndpointAddress
 * @property int $ZeppelinRemoteSparkInterpreterPort
 * @property int $NumberOfNodes
 * @property 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X' $WorkerType
 * @property string $GlueVersion
 * @property int $NumberOfWorkers
 * @property string $AvailabilityZone
 * @property string $VpcId
 * @property string $ExtraPythonLibsS3Path
 * @property string $ExtraJarsS3Path
 * @property string $FailureReason
 * @property string $SecurityConfiguration
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property array<string, string> $Arguments
 */
class CreateDevEndpointResponse extends Response
{
}
