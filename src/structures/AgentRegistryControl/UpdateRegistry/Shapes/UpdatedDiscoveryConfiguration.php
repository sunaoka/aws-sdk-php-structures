<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedAuthorizerConfiguration|null $authorizerConfiguration
 */
class UpdatedDiscoveryConfiguration extends Shape
{
    /**
     * @param array{authorizerConfiguration?: UpdatedAuthorizerConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
