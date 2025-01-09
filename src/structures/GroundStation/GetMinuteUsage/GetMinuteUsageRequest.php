<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetMinuteUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 12> $month
 * @property int<2018, 3000> $year
 */
class GetMinuteUsageRequest extends Request
{
    /**
     * @param array{
     *     month: int<1, 12>,
     *     year: int<2018, 3000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
