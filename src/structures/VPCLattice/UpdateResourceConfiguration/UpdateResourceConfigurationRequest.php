<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateResourceConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $allowAssociationToShareableServiceNetwork
 * @property list<string>|null $portRanges
 * @property Shapes\ResourceConfigurationDefinition|null $resourceConfigurationDefinition
 * @property string $resourceConfigurationIdentifier
 */
class UpdateResourceConfigurationRequest extends Request
{
    /**
     * @param array{
     *     allowAssociationToShareableServiceNetwork?: bool|null,
     *     portRanges?: list<string>|null,
     *     resourceConfigurationDefinition?: Shapes\ResourceConfigurationDefinition|null,
     *     resourceConfigurationIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
