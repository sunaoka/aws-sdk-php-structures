<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchDeleteTopicReviewedAnswer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TopicId
 * @property string $TopicArn
 * @property list<Shapes\SucceededTopicReviewedAnswer> $SucceededAnswers
 * @property list<Shapes\InvalidTopicReviewedAnswer> $InvalidAnswers
 * @property string $RequestId
 * @property int $Status
 */
class BatchDeleteTopicReviewedAnswerResponse extends Response
{
}
