<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $ReviewedTime
 * @property 'APPROVED'|'NOT_REVIEWED'|'PENDING'|'REJECTED' $Status
 * @property string $Reviewer
 */
class ReviewInformation extends Shape
{
    /**
     * @param array{
     *     ReviewedTime?: \Aws\Api\DateTimeResult,
     *     Status?: 'APPROVED'|'NOT_REVIEWED'|'PENDING'|'REJECTED',
     *     Reviewer?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
