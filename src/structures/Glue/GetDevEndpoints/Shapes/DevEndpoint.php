<?php

namespace Sunaoka\Aws\Structures\Glue\GetDevEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EndpointName
 * @property string|null $RoleArn
 * @property list<string>|null $SecurityGroupIds
 * @property string|null $SubnetId
 * @property string|null $YarnEndpointAddress
 * @property string|null $PrivateAddress
 * @property int|null $ZeppelinRemoteSparkInterpreterPort
 * @property string|null $PublicAddress
 * @property string|null $Status
 * @property 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X'|null $WorkerType
 * @property string|null $GlueVersion
 * @property int|null $NumberOfWorkers
 * @property int|null $NumberOfNodes
 * @property string|null $AvailabilityZone
 * @property string|null $VpcId
 * @property string|null $ExtraPythonLibsS3Path
 * @property string|null $ExtraJarsS3Path
 * @property string|null $FailureReason
 * @property string|null $LastUpdateStatus
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimestamp
 * @property string|null $PublicKey
 * @property list<string>|null $PublicKeys
 * @property string|null $SecurityConfiguration
 * @property array<string, string>|null $Arguments
 */
class DevEndpoint extends Shape
{
    /**
     * @param array{
     *     EndpointName?: string|null,
     *     RoleArn?: string|null,
     *     SecurityGroupIds?: list<string>|null,
     *     SubnetId?: string|null,
     *     YarnEndpointAddress?: string|null,
     *     PrivateAddress?: string|null,
     *     ZeppelinRemoteSparkInterpreterPort?: int|null,
     *     PublicAddress?: string|null,
     *     Status?: string|null,
     *     WorkerType?: 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X'|null,
     *     GlueVersion?: string|null,
     *     NumberOfWorkers?: int|null,
     *     NumberOfNodes?: int|null,
     *     AvailabilityZone?: string|null,
     *     VpcId?: string|null,
     *     ExtraPythonLibsS3Path?: string|null,
     *     ExtraJarsS3Path?: string|null,
     *     FailureReason?: string|null,
     *     LastUpdateStatus?: string|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     PublicKey?: string|null,
     *     PublicKeys?: list<string>|null,
     *     SecurityConfiguration?: string|null,
     *     Arguments?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
