<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFlowDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $FlowDefinitionArn
 * @property string $FlowDefinitionName
 * @property 'Initializing'|'Active'|'Failed'|'Deleting' $FlowDefinitionStatus
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\HumanLoopRequestSource|null $HumanLoopRequestSource
 * @property Shapes\HumanLoopActivationConfig|null $HumanLoopActivationConfig
 * @property Shapes\HumanLoopConfig|null $HumanLoopConfig
 * @property Shapes\FlowDefinitionOutputConfig $OutputConfig
 * @property string $RoleArn
 * @property string|null $FailureReason
 */
class DescribeFlowDefinitionResponse extends Response
{
}
