<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\StartComposition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property ChannelDestinationConfiguration $channel
 * @property S3DestinationConfiguration $s3
 */
class DestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     channel?: ChannelDestinationConfiguration,
     *     s3?: S3DestinationConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
