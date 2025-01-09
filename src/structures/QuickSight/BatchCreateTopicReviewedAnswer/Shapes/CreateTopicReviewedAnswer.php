<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AnswerId
 * @property string $DatasetArn
 * @property string $Question
 * @property TopicIR $Mir
 * @property TopicVisual $PrimaryVisual
 * @property TopicTemplate $Template
 */
class CreateTopicReviewedAnswer extends Shape
{
    /**
     * @param array{
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
