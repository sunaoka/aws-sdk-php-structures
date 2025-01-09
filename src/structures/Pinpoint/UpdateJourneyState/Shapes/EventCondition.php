<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateJourneyState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventDimensions $Dimensions
 * @property string $MessageActivity
 */
class EventCondition extends Shape
{
    /**
     * @param array{
     *     Dimensions?: EventDimensions,
     *     MessageActivity?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
