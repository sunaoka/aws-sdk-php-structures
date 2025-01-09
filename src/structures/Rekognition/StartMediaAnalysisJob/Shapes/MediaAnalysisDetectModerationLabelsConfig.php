<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartMediaAnalysisJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $MinConfidence
 * @property string $ProjectVersion
 */
class MediaAnalysisDetectModerationLabelsConfig extends Shape
{
    /**
     * @param array{
     *     MinConfidence?: float,
     *     ProjectVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
