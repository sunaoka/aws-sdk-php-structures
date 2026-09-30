<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BedrockFoundationModelConfiguration|null $bedrockFoundationModelConfiguration
 * @property MantleFoundationModelConfiguration|null $mantleFoundationModelConfiguration
 * @property 'BEDROCK_FOUNDATION_MODEL'|'MANTLE_FOUNDATION_MODEL' $type
 */
class FoundationModelConfiguration extends Shape
{
    /**
     * @param array{
     *     bedrockFoundationModelConfiguration?: BedrockFoundationModelConfiguration|null,
     *     mantleFoundationModelConfiguration?: MantleFoundationModelConfiguration|null,
     *     type: 'BEDROCK_FOUNDATION_MODEL'|'MANTLE_FOUNDATION_MODEL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
