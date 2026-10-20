<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionId
 * @property \Aws\Api\DateTimeResult|null $lastSeenAt
 * @property list<SessionFinding>|null $findings
 */
class SampleSession extends Shape
{
    /**
     * @param array{
     *     sessionId: string,
     *     lastSeenAt?: \Aws\Api\DateTimeResult|null,
     *     findings?: list<SessionFinding>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
