<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FromAddress
 */
class JourneyEmailMessage extends Shape
{
    /**
     * @param array{FromAddress?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
