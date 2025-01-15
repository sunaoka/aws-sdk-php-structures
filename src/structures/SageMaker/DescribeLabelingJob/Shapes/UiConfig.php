<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeLabelingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UiTemplateS3Uri
 * @property string|null $HumanTaskUiArn
 */
class UiConfig extends Shape
{
    /**
     * @param array{
     *     UiTemplateS3Uri?: string|null,
     *     HumanTaskUiArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
