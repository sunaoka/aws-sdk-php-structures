<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SamplePayloadUrl
 * @property list<string> $SupportedContentTypes
 */
class RecommendationJobPayloadConfig extends Shape
{
    /**
     * @param array{
     *     SamplePayloadUrl?: string,
     *     SupportedContentTypes?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
