<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetBlueprint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Object $assetS3Object
 * @property S3Object $groundTruthS3Object
 */
class BlueprintOptimizationSample extends Shape
{
    /**
     * @param array{
     *     assetS3Object: S3Object,
     *     groundTruthS3Object: S3Object
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
