<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelName
 * @property Shapes\ChannelStorage|null $channelStorage
 * @property Shapes\RetentionPeriod|null $retentionPeriod
 */
class UpdateChannelRequest extends Request
{
    /**
     * @param array{
     *     channelName: string,
     *     channelStorage?: Shapes\ChannelStorage|null,
     *     retentionPeriod?: Shapes\RetentionPeriod|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
