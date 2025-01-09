<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 */
class GetCoreNetworkRequest extends Request
{
    /**
     * @param array{CoreNetworkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
