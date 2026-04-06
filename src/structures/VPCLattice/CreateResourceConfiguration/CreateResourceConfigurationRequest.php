<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateResourceConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $allowAssociationToShareableServiceNetwork
 * @property string|null $clientToken
 * @property string $name
 * @property list<string>|null $portRanges
 * @property 'TCP'|null $protocol
 * @property Shapes\ResourceConfigurationDefinition|null $resourceConfigurationDefinition
 * @property string|null $resourceConfigurationGroupIdentifier
 * @property string|null $resourceGatewayIdentifier
 * @property array<string, string>|null $tags
 * @property 'GROUP'|'CHILD'|'SINGLE'|'ARN' $type
 */
class CreateResourceConfigurationRequest extends Request
{
    /**
     * @param array{
     *     allowAssociationToShareableServiceNetwork?: bool|null,
     *     clientToken?: string|null,
     *     name: string,
     *     portRanges?: list<string>|null,
     *     protocol?: 'TCP'|null,
     *     resourceConfigurationDefinition?: Shapes\ResourceConfigurationDefinition|null,
     *     resourceConfigurationGroupIdentifier?: string|null,
     *     resourceGatewayIdentifier?: string|null,
     *     tags?: array<string, string>|null,
     *     type: 'GROUP'|'CHILD'|'SINGLE'|'ARN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
