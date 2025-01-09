<?php

namespace Sunaoka\Aws\Structures\ElasticInference\DescribeAcceleratorTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $acceleratorTypeName
 * @property MemoryInfo $memoryInfo
 * @property list<KeyValuePair> $throughputInfo
 */
class AcceleratorType extends Shape
{
    /**
     * @param array{
     *     acceleratorTypeName?: string,
     *     memoryInfo?: MemoryInfo,
     *     throughputInfo?: list<KeyValuePair>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
