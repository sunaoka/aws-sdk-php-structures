<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateCoreNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property string|null $Description
 */
class UpdateCoreNetworkRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
