<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelArn
 * @property array<string, AdditionalModelRequestFieldsValue>|null $additionalModelRequestFields
 */
class VectorSearchBedrockRerankingModelConfiguration extends Shape
{
    /**
     * @param array{
     *     modelArn: string,
     *     additionalModelRequestFields?: array<string, AdditionalModelRequestFieldsValue>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
