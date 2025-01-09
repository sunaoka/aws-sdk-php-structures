<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeProjectVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $ConfidenceThreshold
 */
class CustomizationFeatureContentModerationConfig extends Shape
{
    /**
     * @param array{ConfidenceThreshold?: float} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
