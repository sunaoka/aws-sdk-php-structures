<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteResourceGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceGatewayIdentifier
 */
class DeleteResourceGatewayRequest extends Request
{
    /**
     * @param array{resourceGatewayIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
