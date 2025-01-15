<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WaitFor
 * @property string|null $WaitUntil
 */
class WaitTime extends Shape
{
    /**
     * @param array{
     *     WaitFor?: string|null,
     *     WaitUntil?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
