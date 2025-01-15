<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoMLJobCompletionCriteria|null $CompletionCriteria
 * @property string|null $BaseModelName
 * @property array<string, string>|null $TextGenerationHyperParameters
 * @property ModelAccessConfig|null $ModelAccessConfig
 */
class TextGenerationJobConfig extends Shape
{
    /**
     * @param array{
     *     CompletionCriteria?: AutoMLJobCompletionCriteria|null,
     *     BaseModelName?: string|null,
     *     TextGenerationHyperParameters?: array<string, string>|null,
     *     ModelAccessConfig?: ModelAccessConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
