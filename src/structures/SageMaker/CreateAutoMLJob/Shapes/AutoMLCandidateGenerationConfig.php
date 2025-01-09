<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FeatureSpecificationS3Uri
 * @property list<AutoMLAlgorithmConfig> $AlgorithmsConfig
 */
class AutoMLCandidateGenerationConfig extends Shape
{
    /**
     * @param array{
     *     FeatureSpecificationS3Uri?: string,
     *     AlgorithmsConfig?: list<AutoMLAlgorithmConfig>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
