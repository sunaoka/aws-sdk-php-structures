<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateServiceNetworkResourceAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $resourceConfigurationIdentifier
 * @property string $serviceNetworkIdentifier
 * @property bool|null $privateDnsEnabled
 * @property array<string, string>|null $tags
 */
class CreateServiceNetworkResourceAssociationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     resourceConfigurationIdentifier: string,
     *     serviceNetworkIdentifier: string,
     *     privateDnsEnabled?: bool|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
