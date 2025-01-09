<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchDeleteTopicReviewedAnswer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TopicId
 * @property list<string> $AnswerIds
 */
class BatchDeleteTopicReviewedAnswerRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TopicId: string,
     *     AnswerIds?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
