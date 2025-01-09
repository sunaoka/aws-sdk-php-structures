<?php

namespace Sunaoka\Aws\Structures\Detective\ListInvestigations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $StartInclusive
 * @property \Aws\Api\DateTimeResult $EndInclusive
 */
class DateFilter extends Shape
{
    /**
     * @param array{
     *     StartInclusive: \Aws\Api\DateTimeResult,
     *     EndInclusive: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
