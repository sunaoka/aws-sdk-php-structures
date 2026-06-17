<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BedrockFoundationModelConfiguration|null $bedrockFoundationModelConfiguration
 * @property 'BEDROCK_FOUNDATION_MODEL' $type
 */
class FoundationModelConfiguration extends Shape
{
    /**
     * @param array{
     *     bedrockFoundationModelConfiguration?: BedrockFoundationModelConfiguration|null,
     *     type: 'BEDROCK_FOUNDATION_MODEL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
