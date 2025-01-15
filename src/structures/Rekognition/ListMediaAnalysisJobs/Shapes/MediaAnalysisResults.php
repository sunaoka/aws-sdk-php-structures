<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListMediaAnalysisJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Object|null $S3Object
 * @property MediaAnalysisModelVersions|null $ModelVersions
 */
class MediaAnalysisResults extends Shape
{
    /**
     * @param array{
     *     S3Object?: S3Object|null,
     *     ModelVersions?: MediaAnalysisModelVersions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
