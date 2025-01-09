<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelName
 * @property bool $includeStatistics
 */
class DescribeChannelRequest extends Request
{
    /**
     * @param array{
     *     channelName: string,
     *     includeStatistics?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
