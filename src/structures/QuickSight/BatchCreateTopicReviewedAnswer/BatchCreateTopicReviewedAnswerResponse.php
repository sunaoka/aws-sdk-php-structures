<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TopicId
 * @property string $TopicArn
 * @property list<Shapes\SucceededTopicReviewedAnswer> $SucceededAnswers
 * @property list<Shapes\InvalidTopicReviewedAnswer> $InvalidAnswers
 * @property int $Status
 * @property string $RequestId
 */
class BatchCreateTopicReviewedAnswerResponse extends Response
{
}
