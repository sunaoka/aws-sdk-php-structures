<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SessionMetadataShape>|null $sessionMetadata
 */
class EvaluationMetadata extends Shape
{
    /**
     * @param array{sessionMetadata?: list<SessionMetadataShape>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
