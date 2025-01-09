<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteCapacityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $capacityProvider
 */
class DeleteCapacityProviderRequest extends Request
{
    /**
     * @param array{capacityProvider: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
