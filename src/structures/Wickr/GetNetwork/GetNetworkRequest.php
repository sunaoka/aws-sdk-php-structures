<?php

namespace Sunaoka\Aws\Structures\Wickr\GetNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 */
class GetNetworkRequest extends Request
{
    /**
     * @param array{networkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
