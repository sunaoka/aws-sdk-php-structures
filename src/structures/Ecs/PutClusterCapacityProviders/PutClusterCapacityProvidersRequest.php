<?php

namespace Sunaoka\Aws\Structures\Ecs\PutClusterCapacityProviders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property list<string> $capacityProviders
 * @property list<Shapes\CapacityProviderStrategyItem> $defaultCapacityProviderStrategy
 */
class PutClusterCapacityProvidersRequest extends Request
{
    /**
     * @param array{
     *     cluster: string,
     *     capacityProviders: list<string>,
     *     defaultCapacityProviderStrategy: list<Shapes\CapacityProviderStrategyItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
