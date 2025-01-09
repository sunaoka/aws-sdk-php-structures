<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartMediaAnalysisJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Bucket
 * @property string $S3KeyPrefix
 */
class MediaAnalysisOutputConfig extends Shape
{
    /**
     * @param array{
     *     S3Bucket: string,
     *     S3KeyPrefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
