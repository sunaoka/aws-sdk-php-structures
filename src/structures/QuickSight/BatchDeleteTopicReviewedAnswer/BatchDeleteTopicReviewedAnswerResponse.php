<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchDeleteTopicReviewedAnswer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TopicId
 * @property string|null $TopicArn
 * @property list<Shapes\SucceededTopicReviewedAnswer>|null $SucceededAnswers
 * @property list<Shapes\InvalidTopicReviewedAnswer>|null $InvalidAnswers
 * @property string|null $RequestId
 * @property int|null $Status
 */
class BatchDeleteTopicReviewedAnswerResponse extends Response
{
}
