<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $channelName
 * @property string $next
 */
class ChannelActivity extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     channelName: string,
     *     next?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
