<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateResourceConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceConfigurationIdentifier
 * @property Shapes\ResourceConfigurationDefinition|null $resourceConfigurationDefinition
 * @property bool|null $allowAssociationToShareableServiceNetwork
 * @property list<string>|null $portRanges
 */
class UpdateResourceConfigurationRequest extends Request
{
    /**
     * @param array{
     *     resourceConfigurationIdentifier: string,
     *     resourceConfigurationDefinition?: Shapes\ResourceConfigurationDefinition|null,
     *     allowAssociationToShareableServiceNetwork?: bool|null,
     *     portRanges?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
