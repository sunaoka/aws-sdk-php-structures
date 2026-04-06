<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\StopFlowExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $executionArn
 * @property 'Running'|'Succeeded'|'Failed'|'TimedOut'|'Aborted' $status
 */
class StopFlowExecutionResponse extends Response
{
}
