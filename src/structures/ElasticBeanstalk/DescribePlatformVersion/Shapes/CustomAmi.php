<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribePlatformVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VirtualizationType
 * @property string $ImageId
 */
class CustomAmi extends Shape
{
    /**
     * @param array{
     *     VirtualizationType?: string,
     *     ImageId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
