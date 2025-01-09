<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Rerank\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AdditionalModelRequestFieldsValue> $additionalModelRequestFields
 * @property string $modelArn
 */
class BedrockRerankingModelConfiguration extends Shape
{
    /**
     * @param array{
     *     additionalModelRequestFields?: array<string, AdditionalModelRequestFieldsValue>,
     *     modelArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
