<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartStreamProcessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ProducerTimestamp
 * @property string $FragmentNumber
 */
class KinesisVideoStreamStartSelector extends Shape
{
    /**
     * @param array{
     *     ProducerTimestamp?: int,
     *     FragmentNumber?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
