<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAlgorithm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AlgorithmName
 * @property string $AlgorithmDescription
 * @property Shapes\TrainingSpecification $TrainingSpecification
 * @property Shapes\InferenceSpecification $InferenceSpecification
 * @property Shapes\AlgorithmValidationSpecification $ValidationSpecification
 * @property bool $CertifyForMarketplace
 * @property list<Shapes\Tag> $Tags
 */
class CreateAlgorithmRequest extends Request
{
    /**
     * @param array{
     *     AlgorithmName: string,
     *     AlgorithmDescription?: string,
     *     TrainingSpecification: Shapes\TrainingSpecification,
     *     InferenceSpecification?: Shapes\InferenceSpecification,
     *     ValidationSpecification?: Shapes\AlgorithmValidationSpecification,
     *     CertifyForMarketplace?: bool,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
