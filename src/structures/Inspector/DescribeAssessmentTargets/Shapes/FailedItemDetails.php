<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeAssessmentTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INVALID_ARN'|'DUPLICATE_ARN'|'ITEM_DOES_NOT_EXIST'|'ACCESS_DENIED'|'LIMIT_EXCEEDED'|'INTERNAL_ERROR' $failureCode
 * @property bool $retryable
 */
class FailedItemDetails extends Shape
{
    /**
     * @param array{
     *     failureCode: 'INVALID_ARN'|'DUPLICATE_ARN'|'ITEM_DOES_NOT_EXIST'|'ACCESS_DENIED'|'LIMIT_EXCEEDED'|'INTERNAL_ERROR',
     *     retryable: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
