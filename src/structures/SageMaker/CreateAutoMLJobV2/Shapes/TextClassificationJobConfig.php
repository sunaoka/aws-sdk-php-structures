<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoMLJobCompletionCriteria|null $CompletionCriteria
 * @property string $ContentColumn
 * @property string $TargetLabelColumn
 */
class TextClassificationJobConfig extends Shape
{
    /**
     * @param array{
     *     CompletionCriteria?: AutoMLJobCompletionCriteria|null,
     *     ContentColumn: string,
     *     TargetLabelColumn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
