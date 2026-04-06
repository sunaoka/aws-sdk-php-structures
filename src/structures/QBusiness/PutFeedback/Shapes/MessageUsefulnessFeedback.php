<?php

namespace Sunaoka\Aws\Structures\QBusiness\PutFeedback\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USEFUL'|'NOT_USEFUL' $usefulness
 * @property 'NOT_FACTUALLY_CORRECT'|'HARMFUL_OR_UNSAFE'|'INCORRECT_OR_MISSING_SOURCES'|'NOT_HELPFUL'|'FACTUALLY_CORRECT'|'COMPLETE'|'RELEVANT_SOURCES'|'HELPFUL'|'NOT_BASED_ON_DOCUMENTS'|'NOT_COMPLETE'|'NOT_CONCISE'|'OTHER'|null $reason
 * @property string|null $comment
 * @property \Aws\Api\DateTimeResult $submittedAt
 */
class MessageUsefulnessFeedback extends Shape
{
    /**
     * @param array{
     *     usefulness: 'USEFUL'|'NOT_USEFUL',
     *     reason?: 'NOT_FACTUALLY_CORRECT'|'HARMFUL_OR_UNSAFE'|'INCORRECT_OR_MISSING_SOURCES'|'NOT_HELPFUL'|'FACTUALLY_CORRECT'|'COMPLETE'|'RELEVANT_SOURCES'|'HELPFUL'|'NOT_BASED_ON_DOCUMENTS'|'NOT_COMPLETE'|'NOT_CONCISE'|'OTHER'|null,
     *     comment?: string|null,
     *     submittedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
