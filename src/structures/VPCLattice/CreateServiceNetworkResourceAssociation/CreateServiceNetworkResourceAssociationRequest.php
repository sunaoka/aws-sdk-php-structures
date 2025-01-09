<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateServiceNetworkResourceAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $resourceConfigurationIdentifier
 * @property string $serviceNetworkIdentifier
 * @property array<string, string> $tags
 */
class CreateServiceNetworkResourceAssociationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     resourceConfigurationIdentifier: string,
     *     serviceNetworkIdentifier: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
