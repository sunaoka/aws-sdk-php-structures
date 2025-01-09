<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicReviewedAnswers;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TopicId
 * @property string $TopicArn
 * @property list<Shapes\TopicReviewedAnswer> $Answers
 * @property int $Status
 * @property string $RequestId
 */
class ListTopicReviewedAnswersResponse extends Response
{
}
