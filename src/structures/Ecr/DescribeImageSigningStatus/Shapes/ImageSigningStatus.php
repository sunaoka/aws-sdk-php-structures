<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageSigningStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $signingProfileArn
 * @property string|null $failureCode
 * @property string|null $failureReason
 * @property 'IN_PROGRESS'|'COMPLETE'|'FAILED'|null $status
 */
class ImageSigningStatus extends Shape
{
    /**
     * @param array{
     *     signingProfileArn?: string|null,
     *     failureCode?: string|null,
     *     failureReason?: string|null,
     *     status?: 'IN_PROGRESS'|'COMPLETE'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
