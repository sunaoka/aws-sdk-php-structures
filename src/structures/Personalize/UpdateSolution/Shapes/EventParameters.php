<?php

namespace Sunaoka\Aws\Structures\Personalize\UpdateSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $eventType
 * @property double|null $eventValueThreshold
 * @property double|null $weight
 */
class EventParameters extends Shape
{
    /**
     * @param array{
     *     eventType?: string|null,
     *     eventValueThreshold?: double|null,
     *     weight?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
