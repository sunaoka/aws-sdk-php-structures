<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\GetNetworkResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkResourceArn
 */
class GetNetworkResourceRequest extends Request
{
    /**
     * @param array{networkResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
