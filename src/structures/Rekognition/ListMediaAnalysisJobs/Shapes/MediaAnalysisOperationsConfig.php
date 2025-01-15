<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListMediaAnalysisJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MediaAnalysisDetectModerationLabelsConfig|null $DetectModerationLabels
 */
class MediaAnalysisOperationsConfig extends Shape
{
    /**
     * @param array{DetectModerationLabels?: MediaAnalysisDetectModerationLabelsConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
