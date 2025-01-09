<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deliveryStreamName
 * @property string $separator
 * @property Payload $payload
 */
class FirehoseAction extends Shape
{
    /**
     * @param array{
     *     deliveryStreamName: string,
     *     separator?: string,
     *     payload?: Payload
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
