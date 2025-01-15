<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceSpec|null $DefaultResourceSpec
 * @property list<CustomImage>|null $CustomImages
 */
class RSessionAppSettings extends Shape
{
    /**
     * @param array{
     *     DefaultResourceSpec?: ResourceSpec|null,
     *     CustomImages?: list<CustomImage>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
