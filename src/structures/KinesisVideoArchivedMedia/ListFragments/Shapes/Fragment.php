<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\ListFragments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FragmentNumber
 * @property int $FragmentSizeInBytes
 * @property \Aws\Api\DateTimeResult $ProducerTimestamp
 * @property \Aws\Api\DateTimeResult $ServerTimestamp
 * @property int $FragmentLengthInMilliseconds
 */
class Fragment extends Shape
{
    /**
     * @param array{
     *     FragmentNumber?: string,
     *     FragmentSizeInBytes?: int,
     *     ProducerTimestamp?: \Aws\Api\DateTimeResult,
     *     ServerTimestamp?: \Aws\Api\DateTimeResult,
     *     FragmentLengthInMilliseconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
