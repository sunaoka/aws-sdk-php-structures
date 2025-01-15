<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SamplePayloadUrl
 * @property list<string>|null $SupportedContentTypes
 */
class RecommendationJobPayloadConfig extends Shape
{
    /**
     * @param array{
     *     SamplePayloadUrl?: string|null,
     *     SupportedContentTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
