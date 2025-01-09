<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AnswerId
 * @property 'INTERNAL_ERROR'|'MISSING_ANSWER'|'DATASET_DOES_NOT_EXIST'|'INVALID_DATASET_ARN'|'DUPLICATED_ANSWER'|'INVALID_DATA'|'MISSING_REQUIRED_FIELDS' $Error
 */
class InvalidTopicReviewedAnswer extends Shape
{
    /**
     * @param array{
     *     AnswerId?: string,
     *     Error?: 'INTERNAL_ERROR'|'MISSING_ANSWER'|'DATASET_DOES_NOT_EXIST'|'INVALID_DATASET_ARN'|'DUPLICATED_ANSWER'|'INVALID_DATA'|'MISSING_REQUIRED_FIELDS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
