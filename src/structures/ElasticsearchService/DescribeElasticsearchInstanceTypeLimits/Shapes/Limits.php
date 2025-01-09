<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchInstanceTypeLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StorageType> $StorageTypes
 * @property InstanceLimits $InstanceLimits
 * @property list<AdditionalLimit> $AdditionalLimits
 */
class Limits extends Shape
{
    /**
     * @param array{
     *     StorageTypes?: list<StorageType>,
     *     InstanceLimits?: InstanceLimits,
     *     AdditionalLimits?: list<AdditionalLimit>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
