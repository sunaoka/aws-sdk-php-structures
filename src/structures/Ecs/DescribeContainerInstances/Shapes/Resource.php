<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeContainerInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $type
 * @property double|null $doubleValue
 * @property int|null $longValue
 * @property int|null $integerValue
 * @property list<string>|null $stringSetValue
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     type?: string|null,
     *     doubleValue?: double|null,
     *     longValue?: int|null,
     *     integerValue?: int|null,
     *     stringSetValue?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
