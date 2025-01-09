<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateGlobalNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $Description
 */
class UpdateGlobalNetworkRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
