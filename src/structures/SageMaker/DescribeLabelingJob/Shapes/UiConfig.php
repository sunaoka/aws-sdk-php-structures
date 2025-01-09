<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeLabelingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UiTemplateS3Uri
 * @property string $HumanTaskUiArn
 */
class UiConfig extends Shape
{
    /**
     * @param array{
     *     UiTemplateS3Uri?: string,
     *     HumanTaskUiArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
