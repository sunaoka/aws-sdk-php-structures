<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicReviewedAnswers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $AnswerId
 * @property string $DatasetArn
 * @property string $Question
 * @property TopicIR $Mir
 * @property TopicVisual $PrimaryVisual
 * @property TopicTemplate $Template
 */
class TopicReviewedAnswer extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     AnswerId: string,
     *     DatasetArn: string,
     *     Question: string,
     *     Mir?: TopicIR,
     *     PrimaryVisual?: TopicVisual,
     *     Template?: TopicTemplate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
