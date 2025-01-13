<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelIdentifier
 * @property string $inferenceParams
 * @property PerformanceConfiguration $performanceConfig
 */
class EvaluationBedrockModel extends Shape
{
    /**
     * @param array{
     *     modelIdentifier: string,
     *     inferenceParams?: string,
     *     performanceConfig?: PerformanceConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
