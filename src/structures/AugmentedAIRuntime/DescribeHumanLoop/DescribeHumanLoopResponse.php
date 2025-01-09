<?php

namespace Sunaoka\Aws\Structures\AugmentedAIRuntime\DescribeHumanLoop;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $FailureReason
 * @property string $FailureCode
 * @property 'InProgress'|'Failed'|'Completed'|'Stopped'|'Stopping' $HumanLoopStatus
 * @property string $HumanLoopName
 * @property string $HumanLoopArn
 * @property string $FlowDefinitionArn
 * @property Shapes\HumanLoopOutput $HumanLoopOutput
 */
class DescribeHumanLoopResponse extends Response
{
}
