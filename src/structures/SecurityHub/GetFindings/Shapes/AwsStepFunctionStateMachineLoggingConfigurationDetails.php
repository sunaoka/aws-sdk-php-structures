<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsStepFunctionStateMachineLoggingConfigurationDestinationsDetails>|null $Destinations
 * @property bool|null $IncludeExecutionData
 * @property string|null $Level
 */
class AwsStepFunctionStateMachineLoggingConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     Destinations?: list<AwsStepFunctionStateMachineLoggingConfigurationDestinationsDetails>|null,
     *     IncludeExecutionData?: bool|null,
     *     Level?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
