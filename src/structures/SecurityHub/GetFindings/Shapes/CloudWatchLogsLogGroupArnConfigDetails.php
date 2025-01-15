<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CloudWatchLogsLogGroupArn
 * @property string|null $HostedZoneId
 * @property string|null $Id
 */
class CloudWatchLogsLogGroupArnConfigDetails extends Shape
{
    /**
     * @param array{
     *     CloudWatchLogsLogGroupArn?: string|null,
     *     HostedZoneId?: string|null,
     *     Id?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
