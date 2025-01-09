<?php

namespace Sunaoka\Aws\Structures\ElasticInference\DescribeAcceleratorTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property int $value
 */
class KeyValuePair extends Shape
{
    /**
     * @param array{
     *     key?: string,
     *     value?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
