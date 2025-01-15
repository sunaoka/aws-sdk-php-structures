<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AnswerId
 * @property string $DatasetArn
 * @property string $Question
 * @property TopicIR|null $Mir
 * @property TopicVisual|null $PrimaryVisual
 * @property TopicTemplate|null $Template
 */
class CreateTopicReviewedAnswer extends Shape
{
    /**
     * @param array{
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
