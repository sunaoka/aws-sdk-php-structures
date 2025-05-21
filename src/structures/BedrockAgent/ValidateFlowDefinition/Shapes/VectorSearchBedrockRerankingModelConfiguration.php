<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AdditionalModelRequestFieldsValue>|null $additionalModelRequestFields
 * @property string $modelArn
 */
class VectorSearchBedrockRerankingModelConfiguration extends Shape
{
    /**
     * @param array{
     *     additionalModelRequestFields?: array<string, AdditionalModelRequestFieldsValue>|null,
     *     modelArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
