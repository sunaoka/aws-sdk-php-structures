<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicReviewedAnswers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string $AnswerId
 * @property string $DatasetArn
 * @property string $Question
 * @property TopicIR|null $Mir
 * @property TopicVisual|null $PrimaryVisual
 * @property TopicTemplate|null $Template
 */
class TopicReviewedAnswer extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     AnswerId: string,
     *     DatasetArn: string,
     *     Question: string,
     *     Mir?: TopicIR|null,
     *     PrimaryVisual?: TopicVisual|null,
     *     Template?: TopicTemplate|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
