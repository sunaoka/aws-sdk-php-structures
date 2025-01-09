<?php

namespace Sunaoka\Aws\Structures\Backup\CreateLegalHold\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $FromDate
 * @property \Aws\Api\DateTimeResult $ToDate
 */
class DateRange extends Shape
{
    /**
     * @param array{
     *     FromDate: \Aws\Api\DateTimeResult,
     *     ToDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
