<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TopicId
 * @property string|null $TopicArn
 * @property list<Shapes\SucceededTopicReviewedAnswer>|null $SucceededAnswers
 * @property list<Shapes\InvalidTopicReviewedAnswer>|null $InvalidAnswers
 * @property int|null $Status
 * @property string|null $RequestId
 */
class BatchCreateTopicReviewedAnswerResponse extends Response
{
}
