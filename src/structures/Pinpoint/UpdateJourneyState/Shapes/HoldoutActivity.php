<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateJourneyState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NextActivity
 * @property int $Percentage
 */
class HoldoutActivity extends Shape
{
    /**
     * @param array{
     *     NextActivity?: string,
     *     Percentage: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
