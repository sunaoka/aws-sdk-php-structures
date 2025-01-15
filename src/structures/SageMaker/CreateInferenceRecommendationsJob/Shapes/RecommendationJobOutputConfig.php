<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KmsKeyId
 * @property RecommendationJobCompiledOutputConfig|null $CompiledOutputConfig
 */
class RecommendationJobOutputConfig extends Shape
{
    /**
     * @param array{
     *     KmsKeyId?: string|null,
     *     CompiledOutputConfig?: RecommendationJobCompiledOutputConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
