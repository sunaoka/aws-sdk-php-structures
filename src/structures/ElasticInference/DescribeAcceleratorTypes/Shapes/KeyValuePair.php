<?php

namespace Sunaoka\Aws\Structures\ElasticInference\DescribeAcceleratorTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $key
 * @property int|null $value
 */
class KeyValuePair extends Shape
{
    /**
     * @param array{
     *     key?: string|null,
     *     value?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
