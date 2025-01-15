<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateServiceNetworkServiceAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $serviceIdentifier
 * @property string $serviceNetworkIdentifier
 * @property array<string, string>|null $tags
 */
class CreateServiceNetworkServiceAssociationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     serviceIdentifier: string,
     *     serviceNetworkIdentifier: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
