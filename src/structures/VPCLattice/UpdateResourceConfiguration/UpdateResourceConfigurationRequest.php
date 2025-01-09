<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateResourceConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $allowAssociationToShareableServiceNetwork
 * @property list<string> $portRanges
 * @property Shapes\ResourceConfigurationDefinition $resourceConfigurationDefinition
 * @property string $resourceConfigurationIdentifier
 */
class UpdateResourceConfigurationRequest extends Request
{
    /**
     * @param array{
     *     allowAssociationToShareableServiceNetwork?: bool,
     *     portRanges?: list<string>,
     *     resourceConfigurationDefinition?: Shapes\ResourceConfigurationDefinition,
     *     resourceConfigurationIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
