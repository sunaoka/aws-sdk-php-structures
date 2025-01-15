<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartStreamProcessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $ProducerTimestamp
 * @property string|null $FragmentNumber
 */
class KinesisVideoStreamStartSelector extends Shape
{
    /**
     * @param array{
     *     ProducerTimestamp?: int<0, max>|null,
     *     FragmentNumber?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
