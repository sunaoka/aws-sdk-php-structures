<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetMinuteUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $month
 * @property int $year
 */
class GetMinuteUsageRequest extends Request
{
    /**
     * @param array{
     *     month: int,
     *     year: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
