<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeAccountOverview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $FromTime
 * @property \Aws\Api\DateTimeResult $ToTime
 */
class DescribeAccountOverviewRequest extends Request
{
    /**
     * @param array{
     *     FromTime: \Aws\Api\DateTimeResult,
     *     ToTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
