<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListMediaAnalysisJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $MinConfidence
 * @property string|null $ProjectVersion
 */
class MediaAnalysisDetectModerationLabelsConfig extends Shape
{
    /**
     * @param array{
     *     MinConfidence?: float|null,
     *     ProjectVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
