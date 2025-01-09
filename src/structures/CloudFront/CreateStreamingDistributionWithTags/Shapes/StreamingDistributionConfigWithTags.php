<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateStreamingDistributionWithTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StreamingDistributionConfig $StreamingDistributionConfig
 * @property Tags $Tags
 */
class StreamingDistributionConfigWithTags extends Shape
{
    /**
     * @param array{
     *     StreamingDistributionConfig: StreamingDistributionConfig,
     *     Tags: Tags
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
