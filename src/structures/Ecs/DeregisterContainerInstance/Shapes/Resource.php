<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterContainerInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $type
 * @property double $doubleValue
 * @property int $longValue
 * @property int $integerValue
 * @property list<string> $stringSetValue
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     type?: string,
     *     doubleValue?: double,
     *     longValue?: int,
     *     integerValue?: int,
     *     stringSetValue?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
