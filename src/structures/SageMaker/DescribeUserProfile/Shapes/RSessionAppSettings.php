<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceSpec $DefaultResourceSpec
 * @property list<CustomImage> $CustomImages
 */
class RSessionAppSettings extends Shape
{
    /**
     * @param array{
     *     DefaultResourceSpec?: ResourceSpec,
     *     CustomImages?: list<CustomImage>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
