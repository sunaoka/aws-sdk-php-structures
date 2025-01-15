<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetComposition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property ChannelDestinationConfiguration|null $channel
 * @property S3DestinationConfiguration|null $s3
 */
class DestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     channel?: ChannelDestinationConfiguration|null,
     *     s3?: S3DestinationConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
