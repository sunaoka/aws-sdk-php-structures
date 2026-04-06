<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogsLogGroupArnConfigDetails|null $CloudWatchLogsLogGroupArn
 */
class AwsRoute53QueryLoggingConfigDetails extends Shape
{
    /**
     * @param array{CloudWatchLogsLogGroupArn?: CloudWatchLogsLogGroupArnConfigDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
