<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\GetNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkArn
 */
class GetNetworkRequest extends Request
{
    /**
     * @param array{networkArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
