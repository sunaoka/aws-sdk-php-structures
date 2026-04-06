<?php

namespace Sunaoka\Aws\Structures\Batch\RegisterJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ConsumableResourceRequirement>|null $consumableResourceList
 */
class ConsumableResourceProperties extends Shape
{
    /**
     * @param array{consumableResourceList?: list<ConsumableResourceRequirement>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
