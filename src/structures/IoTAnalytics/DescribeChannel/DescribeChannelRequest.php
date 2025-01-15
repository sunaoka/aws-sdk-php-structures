<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelName
 * @property bool|null $includeStatistics
 */
class DescribeChannelRequest extends Request
{
    /**
     * @param array{
     *     channelName: string,
     *     includeStatistics?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
