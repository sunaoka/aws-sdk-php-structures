<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartMediaAnalysisJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MediaAnalysisDetectModerationLabelsConfig $DetectModerationLabels
 */
class MediaAnalysisOperationsConfig extends Shape
{
    /**
     * @param array{DetectModerationLabels?: MediaAnalysisDetectModerationLabelsConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
