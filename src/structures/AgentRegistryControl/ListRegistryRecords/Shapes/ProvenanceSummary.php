<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\ListRegistryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DETECTED_FROM' $relation
 * @property string $sourceId
 * @property 'AWS::BedrockAgentCore::Runtime'|'AWS::BedrockAgentCore::Gateway'|null $sourceType
 */
class ProvenanceSummary extends Shape
{
    /**
     * @param array{
     *     relation: 'DETECTED_FROM',
     *     sourceId: string,
     *     sourceType?: 'AWS::BedrockAgentCore::Runtime'|'AWS::BedrockAgentCore::Gateway'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
