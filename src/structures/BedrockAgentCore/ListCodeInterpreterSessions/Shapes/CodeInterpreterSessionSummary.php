<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListCodeInterpreterSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $codeInterpreterIdentifier
 * @property string $sessionId
 * @property string|null $name
 * @property 'READY'|'TERMINATED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 */
class CodeInterpreterSessionSummary extends Shape
{
    /**
     * @param array{
     *     codeInterpreterIdentifier: string,
     *     sessionId: string,
     *     name?: string|null,
     *     status: 'READY'|'TERMINATED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
