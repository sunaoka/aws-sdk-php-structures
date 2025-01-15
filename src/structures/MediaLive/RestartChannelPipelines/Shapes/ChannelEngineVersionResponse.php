<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $ExpirationDate
 * @property string|null $Version
 */
class ChannelEngineVersionResponse extends Shape
{
    /**
     * @param array{
     *     ExpirationDate?: \Aws\Api\DateTimeResult|null,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
