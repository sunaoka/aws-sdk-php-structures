<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListBrowserSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $browserIdentifier
 * @property string $sessionId
 * @property string|null $name
 * @property 'READY'|'TERMINATED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 */
class BrowserSessionSummary extends Shape
{
    /**
     * @param array{
     *     browserIdentifier: string,
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
