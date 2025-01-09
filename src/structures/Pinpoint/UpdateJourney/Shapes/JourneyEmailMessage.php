<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FromAddress
 */
class JourneyEmailMessage extends Shape
{
    /**
     * @param array{FromAddress?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
