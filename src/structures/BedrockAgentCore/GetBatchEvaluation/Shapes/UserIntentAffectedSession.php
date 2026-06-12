<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionId
 * @property list<string> $userMessages
 */
class UserIntentAffectedSession extends Shape
{
    /**
     * @param array{
     *     sessionId: string,
     *     userMessages: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
