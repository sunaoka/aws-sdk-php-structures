<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DescribeVodSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $OffsetMillis
 */
class AdBreakOpportunity extends Shape
{
    /**
     * @param array{OffsetMillis: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
