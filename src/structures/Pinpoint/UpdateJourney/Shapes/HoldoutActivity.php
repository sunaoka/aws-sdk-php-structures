<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NextActivity
 * @property int $Percentage
 */
class HoldoutActivity extends Shape
{
    /**
     * @param array{
     *     NextActivity?: string|null,
     *     Percentage: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
