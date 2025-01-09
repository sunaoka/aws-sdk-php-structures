<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LogGroupArn
 */
class AwsStepFunctionStateMachineLoggingConfigurationDestinationsCloudWatchLogsLogGroupDetails extends Shape
{
    /**
     * @param array{LogGroupArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
