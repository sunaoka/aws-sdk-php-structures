<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelName
 * @property Shapes\ChannelStorage $channelStorage
 * @property Shapes\RetentionPeriod $retentionPeriod
 */
class UpdateChannelRequest extends Request
{
    /**
     * @param array{
     *     channelName: string,
     *     channelStorage?: Shapes\ChannelStorage,
     *     retentionPeriod?: Shapes\RetentionPeriod
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
