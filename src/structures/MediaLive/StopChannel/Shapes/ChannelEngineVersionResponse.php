<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $ExpirationDate
 * @property string $Version
 */
class ChannelEngineVersionResponse extends Shape
{
    /**
     * @param array{
     *     ExpirationDate?: \Aws\Api\DateTimeResult,
     *     Version?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
