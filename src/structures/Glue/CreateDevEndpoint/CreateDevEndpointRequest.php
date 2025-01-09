<?php

namespace Sunaoka\Aws\Structures\Glue\CreateDevEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 * @property string $RoleArn
 * @property list<string> $SecurityGroupIds
 * @property string $SubnetId
 * @property string $PublicKey
 * @property list<string> $PublicKeys
 * @property int $NumberOfNodes
 * @property 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X' $WorkerType
 * @property string $GlueVersion
 * @property int $NumberOfWorkers
 * @property string $ExtraPythonLibsS3Path
 * @property string $ExtraJarsS3Path
 * @property string $SecurityConfiguration
 * @property array<string, string> $Tags
 * @property array<string, string> $Arguments
 */
class CreateDevEndpointRequest extends Request
{
    /**
     * @param array{
     *     EndpointName: string,
     *     RoleArn: string,
     *     SecurityGroupIds?: list<string>,
     *     SubnetId?: string,
     *     PublicKey?: string,
     *     PublicKeys?: list<string>,
     *     NumberOfNodes?: int,
     *     WorkerType?: 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X',
     *     GlueVersion?: string,
     *     NumberOfWorkers?: int,
     *     ExtraPythonLibsS3Path?: string,
     *     ExtraJarsS3Path?: string,
     *     SecurityConfiguration?: string,
     *     Tags?: array<string, string>,
     *     Arguments?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
