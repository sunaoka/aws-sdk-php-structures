<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateServiceNetworkServiceAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $serviceIdentifier
 * @property string $serviceNetworkIdentifier
 * @property array<string, string> $tags
 */
class CreateServiceNetworkServiceAssociationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     serviceIdentifier: string,
     *     serviceNetworkIdentifier: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
