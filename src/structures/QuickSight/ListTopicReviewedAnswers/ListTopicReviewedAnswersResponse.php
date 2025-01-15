<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicReviewedAnswers;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TopicId
 * @property string|null $TopicArn
 * @property list<Shapes\TopicReviewedAnswer>|null $Answers
 * @property int|null $Status
 * @property string|null $RequestId
 */
class ListTopicReviewedAnswersResponse extends Response
{
}
