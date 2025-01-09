<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Destination
 */
class S3BucketSinkConfiguration extends Shape
{
    /**
     * @param array{Destination: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
