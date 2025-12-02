<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property string $executionArn
 * @property string $flowAliasIdentifier
 * @property string $flowIdentifier
 * @property string $flowVersion
 * @property 'Running'|'Succeeded'|'Failed'|'TimedOut'|'Aborted' $status
 */
class FlowExecutionSummary extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     executionArn: string,
     *     flowAliasIdentifier: string,
     *     flowIdentifier: string,
     *     flowVersion: string,
     *     status: 'Running'|'Succeeded'|'Failed'|'TimedOut'|'Aborted'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
