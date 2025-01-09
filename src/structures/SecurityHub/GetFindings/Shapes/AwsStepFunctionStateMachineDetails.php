<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Label
 * @property AwsStepFunctionStateMachineLoggingConfigurationDetails $LoggingConfiguration
 * @property string $Name
 * @property string $RoleArn
 * @property string $StateMachineArn
 * @property string $Status
 * @property AwsStepFunctionStateMachineTracingConfigurationDetails $TracingConfiguration
 * @property string $Type
 */
class AwsStepFunctionStateMachineDetails extends Shape
{
    /**
     * @param array{
     *     Label?: string,
     *     LoggingConfiguration?: AwsStepFunctionStateMachineLoggingConfigurationDetails,
     *     Name?: string,
     *     RoleArn?: string,
     *     StateMachineArn?: string,
     *     Status?: string,
     *     TracingConfiguration?: AwsStepFunctionStateMachineTracingConfigurationDetails,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
