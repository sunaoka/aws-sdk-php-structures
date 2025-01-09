<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WaitFor
 * @property string $WaitUntil
 */
class WaitTime extends Shape
{
    /**
     * @param array{
     *     WaitFor?: string,
     *     WaitUntil?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
