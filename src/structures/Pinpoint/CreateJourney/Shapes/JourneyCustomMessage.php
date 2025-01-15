<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Data
 */
class JourneyCustomMessage extends Shape
{
    /**
     * @param array{Data?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
