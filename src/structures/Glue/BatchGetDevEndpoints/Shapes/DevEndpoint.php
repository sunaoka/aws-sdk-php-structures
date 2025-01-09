<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetDevEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointName
 * @property string $RoleArn
 * @property list<string> $SecurityGroupIds
 * @property string $SubnetId
 * @property string $YarnEndpointAddress
 * @property string $PrivateAddress
 * @property int $ZeppelinRemoteSparkInterpreterPort
 * @property string $PublicAddress
 * @property string $Status
 * @property 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X' $WorkerType
 * @property string $GlueVersion
 * @property int $NumberOfWorkers
 * @property int $NumberOfNodes
 * @property string $AvailabilityZone
 * @property string $VpcId
 * @property string $ExtraPythonLibsS3Path
 * @property string $ExtraJarsS3Path
 * @property string $FailureReason
 * @property string $LastUpdateStatus
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $LastModifiedTimestamp
 * @property string $PublicKey
 * @property list<string> $PublicKeys
 * @property string $SecurityConfiguration
 * @property array<string, string> $Arguments
 */
class DevEndpoint extends Shape
{
    /**
     * @param array{
     *     EndpointName?: string,
     *     RoleArn?: string,
     *     SecurityGroupIds?: list<string>,
     *     SubnetId?: string,
     *     YarnEndpointAddress?: string,
     *     PrivateAddress?: string,
     *     ZeppelinRemoteSparkInterpreterPort?: int,
     *     PublicAddress?: string,
     *     Status?: string,
     *     WorkerType?: 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X',
     *     GlueVersion?: string,
     *     NumberOfWorkers?: int,
     *     NumberOfNodes?: int,
     *     AvailabilityZone?: string,
     *     VpcId?: string,
     *     ExtraPythonLibsS3Path?: string,
     *     ExtraJarsS3Path?: string,
     *     FailureReason?: string,
     *     LastUpdateStatus?: string,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimestamp?: \Aws\Api\DateTimeResult,
     *     PublicKey?: string,
     *     PublicKeys?: list<string>,
     *     SecurityConfiguration?: string,
     *     Arguments?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
