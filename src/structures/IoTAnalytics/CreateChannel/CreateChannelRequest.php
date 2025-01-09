<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelName
 * @property Shapes\ChannelStorage $channelStorage
 * @property Shapes\RetentionPeriod $retentionPeriod
 * @property list<Shapes\Tag> $tags
 */
class CreateChannelRequest extends Request
{
    /**
     * @param array{
     *     channelName: string,
     *     channelStorage?: Shapes\ChannelStorage,
     *     retentionPeriod?: Shapes\RetentionPeriod,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
