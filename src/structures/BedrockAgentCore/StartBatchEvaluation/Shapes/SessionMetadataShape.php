<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionId
 * @property string|null $testScenarioId
 * @property GroundTruthSource|null $groundTruth
 * @property array<string, string>|null $metadata
 */
class SessionMetadataShape extends Shape
{
    /**
     * @param array{
     *     sessionId: string,
     *     testScenarioId?: string|null,
     *     groundTruth?: GroundTruthSource|null,
     *     metadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
