<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\ListFragments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FragmentNumber
 * @property int|null $FragmentSizeInBytes
 * @property \Aws\Api\DateTimeResult|null $ProducerTimestamp
 * @property \Aws\Api\DateTimeResult|null $ServerTimestamp
 * @property int|null $FragmentLengthInMilliseconds
 */
class Fragment extends Shape
{
    /**
     * @param array{
     *     FragmentNumber?: string|null,
     *     FragmentSizeInBytes?: int|null,
     *     ProducerTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ServerTimestamp?: \Aws\Api\DateTimeResult|null,
     *     FragmentLengthInMilliseconds?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
