<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetFlowExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property list<Shapes\FlowExecutionError>|null $errors
 * @property string $executionArn
 * @property string $flowAliasIdentifier
 * @property string $flowIdentifier
 * @property string $flowVersion
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property 'Running'|'Succeeded'|'Failed'|'TimedOut'|'Aborted' $status
 */
class GetFlowExecutionResponse extends Response
{
}
