<?php

namespace Sunaoka\Aws\Structures\ElasticInference\DescribeAcceleratorTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $acceleratorTypeName
 * @property MemoryInfo|null $memoryInfo
 * @property list<KeyValuePair>|null $throughputInfo
 */
class AcceleratorType extends Shape
{
    /**
     * @param array{
     *     acceleratorTypeName?: string|null,
     *     memoryInfo?: MemoryInfo|null,
     *     throughputInfo?: list<KeyValuePair>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
