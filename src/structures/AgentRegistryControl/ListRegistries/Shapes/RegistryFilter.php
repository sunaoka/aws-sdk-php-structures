<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\ListRegistries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'status'|'discoveryConfiguration.authorizerType' $name
 * @property list<string> $values
 */
class RegistryFilter extends Shape
{
    /**
     * @param array{
     *     name: 'status'|'discoveryConfiguration.authorizerType',
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
