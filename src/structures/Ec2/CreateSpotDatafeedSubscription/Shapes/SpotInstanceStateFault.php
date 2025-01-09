<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSpotDatafeedSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Code
 * @property string $Message
 */
class SpotInstanceStateFault extends Shape
{
    /**
     * @param array{
     *     Code?: string,
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
