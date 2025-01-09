<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeleteGlobalNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 */
class DeleteGlobalNetworkRequest extends Request
{
    /**
     * @param array{GlobalNetworkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
