<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaConcatenationPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3Bucket' $Type
 * @property S3BucketSinkConfiguration $S3BucketSinkConfiguration
 */
class ConcatenationSink extends Shape
{
    /**
     * @param array{
     *     Type: 'S3Bucket',
     *     S3BucketSinkConfiguration: S3BucketSinkConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
