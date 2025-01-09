<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateResourceConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $allowAssociationToShareableServiceNetwork
 * @property string $clientToken
 * @property string $name
 * @property list<string> $portRanges
 * @property 'TCP' $protocol
 * @property Shapes\ResourceConfigurationDefinition $resourceConfigurationDefinition
 * @property string $resourceConfigurationGroupIdentifier
 * @property string $resourceGatewayIdentifier
 * @property array<string, string> $tags
 * @property 'GROUP'|'CHILD'|'SINGLE'|'ARN' $type
 */
class CreateResourceConfigurationRequest extends Request
{
    /**
     * @param array{
     *     allowAssociationToShareableServiceNetwork?: bool,
     *     clientToken?: string,
     *     name: string,
     *     portRanges?: list<string>,
     *     protocol?: 'TCP',
     *     resourceConfigurationDefinition?: Shapes\ResourceConfigurationDefinition,
     *     resourceConfigurationGroupIdentifier?: string,
     *     resourceGatewayIdentifier?: string,
     *     tags?: array<string, string>,
     *     type: 'GROUP'|'CHILD'|'SINGLE'|'ARN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
