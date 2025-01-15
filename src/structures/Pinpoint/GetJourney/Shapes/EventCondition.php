<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventDimensions|null $Dimensions
 * @property string|null $MessageActivity
 */
class EventCondition extends Shape
{
    /**
     * @param array{
     *     Dimensions?: EventDimensions|null,
     *     MessageActivity?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
