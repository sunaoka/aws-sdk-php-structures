<?php

namespace Sunaoka\Aws\Structures\Ses\UpdateConfigurationSetEventDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IAMRoleARN
 * @property string $DeliveryStreamARN
 */
class KinesisFirehoseDestination extends Shape
{
    /**
     * @param array{
     *     IAMRoleARN: string,
     *     DeliveryStreamARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
