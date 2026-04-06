<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\InvokeBlueprintOptimizationAsync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Object $s3Object
 */
class BlueprintOptimizationOutputConfiguration extends Shape
{
    /**
     * @param array{s3Object: S3Object} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
