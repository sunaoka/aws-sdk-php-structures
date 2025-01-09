<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateJourneyState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NextActivity
 * @property WaitTime $WaitTime
 */
class WaitActivity extends Shape
{
    /**
     * @param array{
     *     NextActivity?: string,
     *     WaitTime?: WaitTime
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
