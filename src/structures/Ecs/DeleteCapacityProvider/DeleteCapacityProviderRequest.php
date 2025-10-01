<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteCapacityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $capacityProvider
 * @property string|null $cluster
 */
class DeleteCapacityProviderRequest extends Request
{
    /**
     * @param array{
     *     capacityProvider: string,
     *     cluster?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
