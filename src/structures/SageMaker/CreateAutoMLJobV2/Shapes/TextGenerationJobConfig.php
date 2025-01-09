<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoMLJobCompletionCriteria $CompletionCriteria
 * @property string $BaseModelName
 * @property array<string, string> $TextGenerationHyperParameters
 * @property ModelAccessConfig $ModelAccessConfig
 */
class TextGenerationJobConfig extends Shape
{
    /**
     * @param array{
     *     CompletionCriteria?: AutoMLJobCompletionCriteria,
     *     BaseModelName?: string,
     *     TextGenerationHyperParameters?: array<string, string>,
     *     ModelAccessConfig?: ModelAccessConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
