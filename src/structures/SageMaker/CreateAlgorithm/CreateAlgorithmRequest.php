<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAlgorithm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AlgorithmName
 * @property string|null $AlgorithmDescription
 * @property Shapes\TrainingSpecification $TrainingSpecification
 * @property Shapes\InferenceSpecification|null $InferenceSpecification
 * @property Shapes\AlgorithmValidationSpecification|null $ValidationSpecification
 * @property bool|null $CertifyForMarketplace
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateAlgorithmRequest extends Request
{
    /**
     * @param array{
     *     AlgorithmName: string,
     *     AlgorithmDescription?: string|null,
     *     TrainingSpecification: Shapes\TrainingSpecification,
     *     InferenceSpecification?: Shapes\InferenceSpecification|null,
     *     ValidationSpecification?: Shapes\AlgorithmValidationSpecification|null,
     *     CertifyForMarketplace?: bool|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
