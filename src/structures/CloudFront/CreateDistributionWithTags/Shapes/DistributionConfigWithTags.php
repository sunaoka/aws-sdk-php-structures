<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateDistributionWithTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DistributionConfig $DistributionConfig
 * @property Tags $Tags
 */
class DistributionConfigWithTags extends Shape
{
    /**
     * @param array{
     *     DistributionConfig: DistributionConfig,
     *     Tags: Tags
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
