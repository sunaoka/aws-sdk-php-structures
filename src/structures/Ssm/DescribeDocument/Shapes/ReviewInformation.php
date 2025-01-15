<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $ReviewedTime
 * @property 'APPROVED'|'NOT_REVIEWED'|'PENDING'|'REJECTED'|null $Status
 * @property string|null $Reviewer
 */
class ReviewInformation extends Shape
{
    /**
     * @param array{
     *     ReviewedTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'APPROVED'|'NOT_REVIEWED'|'PENDING'|'REJECTED'|null,
     *     Reviewer?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
