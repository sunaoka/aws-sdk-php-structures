<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS/Rekognition/DetectModerationLabels/Image/V3'|'AWS/Textract/AnalyzeDocument/Forms/V1' $AwsManagedHumanLoopRequestSource
 */
class HumanLoopRequestSource extends Shape
{
    /**
     * @param array{AwsManagedHumanLoopRequestSource: 'AWS/Rekognition/DetectModerationLabels/Image/V3'|'AWS/Textract/AnalyzeDocument/Forms/V1'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
