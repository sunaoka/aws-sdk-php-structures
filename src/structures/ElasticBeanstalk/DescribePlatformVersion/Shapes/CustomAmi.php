<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribePlatformVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VirtualizationType
 * @property string|null $ImageId
 */
class CustomAmi extends Shape
{
    /**
     * @param array{
     *     VirtualizationType?: string|null,
     *     ImageId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
