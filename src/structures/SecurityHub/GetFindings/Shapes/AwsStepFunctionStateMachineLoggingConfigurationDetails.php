<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsStepFunctionStateMachineLoggingConfigurationDestinationsDetails> $Destinations
 * @property bool $IncludeExecutionData
 * @property string $Level
 */
class AwsStepFunctionStateMachineLoggingConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     Destinations?: list<AwsStepFunctionStateMachineLoggingConfigurationDestinationsDetails>,
     *     IncludeExecutionData?: bool,
     *     Level?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
