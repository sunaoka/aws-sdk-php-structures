<?php

namespace Sunaoka\Aws\Structures\Batch\ListJobsByConsumableResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $consumableResource
 * @property int|null $quantity
 */
class ConsumableResourceRequirement extends Shape
{
    /**
     * @param array{
     *     consumableResource?: string|null,
     *     quantity?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
