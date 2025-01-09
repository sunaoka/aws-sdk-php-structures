<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateCoreNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property string $Description
 */
class UpdateCoreNetworkRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
