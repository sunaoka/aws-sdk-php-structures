<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TopicId
 * @property list<Shapes\CreateTopicReviewedAnswer> $Answers
 */
class BatchCreateTopicReviewedAnswerRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TopicId: string,
     *     Answers: list<Shapes\CreateTopicReviewedAnswer>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
