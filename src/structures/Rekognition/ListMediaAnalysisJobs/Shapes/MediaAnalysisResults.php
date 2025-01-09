<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListMediaAnalysisJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Object $S3Object
 * @property MediaAnalysisModelVersions $ModelVersions
 */
class MediaAnalysisResults extends Shape
{
    /**
     * @param array{
     *     S3Object?: S3Object,
     *     ModelVersions?: MediaAnalysisModelVersions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
