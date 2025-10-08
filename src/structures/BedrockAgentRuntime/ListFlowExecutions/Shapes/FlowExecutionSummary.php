<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $executionArn
 * @property string $flowAliasIdentifier
 * @property string $flowIdentifier
 * @property string $flowVersion
 * @property 'Running'|'Succeeded'|'Failed'|'TimedOut'|'Aborted' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 */
class FlowExecutionSummary extends Shape
{
    /**
     * @param array{
     *     executionArn: string,
     *     flowAliasIdentifier: string,
     *     flowIdentifier: string,
     *     flowVersion: string,
     *     status: 'Running'|'Succeeded'|'Failed'|'TimedOut'|'Aborted',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     endedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
