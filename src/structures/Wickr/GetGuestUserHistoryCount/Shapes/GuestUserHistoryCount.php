<?php

namespace Sunaoka\Aws\Structures\Wickr\GetGuestUserHistoryCount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $month
 * @property string $count
 */
class GuestUserHistoryCount extends Shape
{
    /**
     * @param array{
     *     month: string,
     *     count: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
