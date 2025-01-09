<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeleteCoreNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 */
class DeleteCoreNetworkRequest extends Request
{
    /**
     * @param array{CoreNetworkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
