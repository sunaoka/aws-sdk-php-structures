<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFlowDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $FlowDefinitionArn
 * @property string $FlowDefinitionName
 * @property 'Initializing'|'Active'|'Failed'|'Deleting' $FlowDefinitionStatus
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\HumanLoopRequestSource $HumanLoopRequestSource
 * @property Shapes\HumanLoopActivationConfig $HumanLoopActivationConfig
 * @property Shapes\HumanLoopConfig $HumanLoopConfig
 * @property Shapes\FlowDefinitionOutputConfig $OutputConfig
 * @property string $RoleArn
 * @property string $FailureReason
 */
class DescribeFlowDefinitionResponse extends Response
{
}
