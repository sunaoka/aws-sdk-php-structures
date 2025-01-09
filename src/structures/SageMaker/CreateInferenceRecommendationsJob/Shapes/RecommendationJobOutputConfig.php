<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKeyId
 * @property RecommendationJobCompiledOutputConfig $CompiledOutputConfig
 */
class RecommendationJobOutputConfig extends Shape
{
    /**
     * @param array{
     *     KmsKeyId?: string,
     *     CompiledOutputConfig?: RecommendationJobCompiledOutputConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
