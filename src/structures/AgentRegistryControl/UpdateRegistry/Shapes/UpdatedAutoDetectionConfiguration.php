<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoDetectionConfiguration|null $optionalValue
 */
class UpdatedAutoDetectionConfiguration extends Shape
{
    /**
     * @param array{optionalValue?: AutoDetectionConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
