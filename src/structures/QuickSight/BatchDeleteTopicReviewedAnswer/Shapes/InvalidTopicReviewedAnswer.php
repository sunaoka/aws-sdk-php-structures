<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchDeleteTopicReviewedAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AnswerId
 * @property 'INTERNAL_ERROR'|'MISSING_ANSWER'|'DATASET_DOES_NOT_EXIST'|'INVALID_DATASET_ARN'|'DUPLICATED_ANSWER'|'INVALID_DATA'|'MISSING_REQUIRED_FIELDS'|null $Error
 */
class InvalidTopicReviewedAnswer extends Shape
{
    /**
     * @param array{
     *     AnswerId?: string|null,
     *     Error?: 'INTERNAL_ERROR'|'MISSING_ANSWER'|'DATASET_DOES_NOT_EXIST'|'INVALID_DATASET_ARN'|'DUPLICATED_ANSWER'|'INVALID_DATA'|'MISSING_REQUIRED_FIELDS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
