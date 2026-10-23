<?php

namespace Sunaoka\Aws\Structures\Continuum\UpdateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EnvironmentNetworkConfiguration|null $network
 * @property string|null $scanFrequency
 * @property 'ENABLED'|'DISABLED'|null $patchCreationPolicy
 */
class EnvironmentConfiguration extends Shape
{
    /**
     * @param array{
     *     network?: EnvironmentNetworkConfiguration|null,
     *     scanFrequency?: string|null,
     *     patchCreationPolicy?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
