<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Data
 */
class JourneyCustomMessage extends Shape
{
    /**
     * @param array{Data?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
