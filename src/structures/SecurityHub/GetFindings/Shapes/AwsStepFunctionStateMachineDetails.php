<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Label
 * @property AwsStepFunctionStateMachineLoggingConfigurationDetails|null $LoggingConfiguration
 * @property string|null $Name
 * @property string|null $RoleArn
 * @property string|null $StateMachineArn
 * @property string|null $Status
 * @property AwsStepFunctionStateMachineTracingConfigurationDetails|null $TracingConfiguration
 * @property string|null $Type
 */
class AwsStepFunctionStateMachineDetails extends Shape
{
    /**
     * @param array{
     *     Label?: string|null,
     *     LoggingConfiguration?: AwsStepFunctionStateMachineLoggingConfigurationDetails|null,
     *     Name?: string|null,
     *     RoleArn?: string|null,
     *     StateMachineArn?: string|null,
     *     Status?: string|null,
     *     TracingConfiguration?: AwsStepFunctionStateMachineTracingConfigurationDetails|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
