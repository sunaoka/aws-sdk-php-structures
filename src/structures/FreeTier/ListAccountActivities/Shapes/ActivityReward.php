<?php

namespace Sunaoka\Aws\Structures\FreeTier\ListAccountActivities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MonetaryAmount|null $credit
 */
class ActivityReward extends Shape
{
    /**
     * @param array{credit?: MonetaryAmount|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
