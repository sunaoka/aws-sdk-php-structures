<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CloudWatchLogsLogGroupArn
 * @property string $HostedZoneId
 * @property string $Id
 */
class CloudWatchLogsLogGroupArnConfigDetails extends Shape
{
    /**
     * @param array{
     *     CloudWatchLogsLogGroupArn?: string,
     *     HostedZoneId?: string,
     *     Id?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
