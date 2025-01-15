<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TimeToLive
 */
class JourneyPushMessage extends Shape
{
    /**
     * @param array{TimeToLive?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
