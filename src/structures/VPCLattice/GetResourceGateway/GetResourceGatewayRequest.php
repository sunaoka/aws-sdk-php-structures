<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetResourceGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceGatewayIdentifier
 */
class GetResourceGatewayRequest extends Request
{
    /**
     * @param array{resourceGatewayIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
