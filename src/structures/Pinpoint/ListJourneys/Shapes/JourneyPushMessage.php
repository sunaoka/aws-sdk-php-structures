<?php

namespace Sunaoka\Aws\Structures\Pinpoint\ListJourneys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TimeToLive
 */
class JourneyPushMessage extends Shape
{
    /**
     * @param array{TimeToLive?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
