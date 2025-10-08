<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetFlowExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $executionArn
 * @property 'Running'|'Succeeded'|'Failed'|'TimedOut'|'Aborted' $status
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property list<Shapes\FlowExecutionError>|null $errors
 * @property string $flowAliasIdentifier
 * @property string $flowIdentifier
 * @property string $flowVersion
 */
class GetFlowExecutionResponse extends Response
{
}
