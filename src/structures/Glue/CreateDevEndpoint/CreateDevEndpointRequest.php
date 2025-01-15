<?php

namespace Sunaoka\Aws\Structures\Glue\CreateDevEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 * @property string $RoleArn
 * @property list<string>|null $SecurityGroupIds
 * @property string|null $SubnetId
 * @property string|null $PublicKey
 * @property list<string>|null $PublicKeys
 * @property int|null $NumberOfNodes
 * @property 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X'|null $WorkerType
 * @property string|null $GlueVersion
 * @property int|null $NumberOfWorkers
 * @property string|null $ExtraPythonLibsS3Path
 * @property string|null $ExtraJarsS3Path
 * @property string|null $SecurityConfiguration
 * @property array<string, string>|null $Tags
 * @property array<string, string>|null $Arguments
 */
class CreateDevEndpointRequest extends Request
{
    /**
     * @param array{
     *     EndpointName: string,
     *     RoleArn: string,
     *     SecurityGroupIds?: list<string>|null,
     *     SubnetId?: string|null,
     *     PublicKey?: string|null,
     *     PublicKeys?: list<string>|null,
     *     NumberOfNodes?: int|null,
     *     WorkerType?: 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X'|null,
     *     GlueVersion?: string|null,
     *     NumberOfWorkers?: int|null,
     *     ExtraPythonLibsS3Path?: string|null,
     *     ExtraJarsS3Path?: string|null,
     *     SecurityConfiguration?: string|null,
     *     Tags?: array<string, string>|null,
     *     Arguments?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
