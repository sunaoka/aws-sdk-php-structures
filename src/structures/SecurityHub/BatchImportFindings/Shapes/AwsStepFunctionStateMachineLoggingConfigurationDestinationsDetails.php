<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsStepFunctionStateMachineLoggingConfigurationDestinationsCloudWatchLogsLogGroupDetails $CloudWatchLogsLogGroup
 */
class AwsStepFunctionStateMachineLoggingConfigurationDestinationsDetails extends Shape
{
    /**
     * @param array{CloudWatchLogsLogGroup?: AwsStepFunctionStateMachineLoggingConfigurationDestinationsCloudWatchLogsLogGroupDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
