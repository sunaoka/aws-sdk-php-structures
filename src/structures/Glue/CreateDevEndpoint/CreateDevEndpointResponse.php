<?php

namespace Sunaoka\Aws\Structures\Glue\CreateDevEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $EndpointName
 * @property string|null $Status
 * @property list<string>|null $SecurityGroupIds
 * @property string|null $SubnetId
 * @property string|null $RoleArn
 * @property string|null $YarnEndpointAddress
 * @property int|null $ZeppelinRemoteSparkInterpreterPort
 * @property int|null $NumberOfNodes
 * @property 'Standard'|'G.1X'|'G.2X'|'G.4X'|'G.8X'|'G.025X'|'Z.2X'|'G.12X'|'G.16X'|'R.1X'|'R.2X'|'R.4X'|'R.8X'|null $WorkerType
 * @property string|null $GlueVersion
 * @property int|null $NumberOfWorkers
 * @property string|null $AvailabilityZone
 * @property string|null $VpcId
 * @property string|null $ExtraPythonLibsS3Path
 * @property string|null $ExtraJarsS3Path
 * @property string|null $FailureReason
 * @property string|null $SecurityConfiguration
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property array<string, string>|null $Arguments
 */
class CreateDevEndpointResponse extends Response
{
}
