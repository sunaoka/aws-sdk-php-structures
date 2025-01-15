<?php

namespace Sunaoka\Aws\Structures\AugmentedAIRuntime\DescribeHumanLoop;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string|null $FailureReason
 * @property string|null $FailureCode
 * @property 'InProgress'|'Failed'|'Completed'|'Stopped'|'Stopping' $HumanLoopStatus
 * @property string $HumanLoopName
 * @property string $HumanLoopArn
 * @property string $FlowDefinitionArn
 * @property Shapes\HumanLoopOutput|null $HumanLoopOutput
 */
class DescribeHumanLoopResponse extends Response
{
}
