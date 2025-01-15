<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $channelName
 * @property string|null $next
 */
class ChannelActivity extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     channelName: string,
     *     next?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
