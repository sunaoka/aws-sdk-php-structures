<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogsLogGroupArnConfigDetails $CloudWatchLogsLogGroupArn
 */
class AwsRoute53QueryLoggingConfigDetails extends Shape
{
    /**
     * @param array{CloudWatchLogsLogGroupArn?: CloudWatchLogsLogGroupArnConfigDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
