<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FeatureSpecificationS3Uri
 * @property list<AutoMLAlgorithmConfig>|null $AlgorithmsConfig
 */
class AutoMLCandidateGenerationConfig extends Shape
{
    /**
     * @param array{
     *     FeatureSpecificationS3Uri?: string|null,
     *     AlgorithmsConfig?: list<AutoMLAlgorithmConfig>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
