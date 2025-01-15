<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeInstanceTypeLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StorageType>|null $StorageTypes
 * @property InstanceLimits|null $InstanceLimits
 * @property list<AdditionalLimit>|null $AdditionalLimits
 */
class Limits extends Shape
{
    /**
     * @param array{
     *     StorageTypes?: list<StorageType>|null,
     *     InstanceLimits?: InstanceLimits|null,
     *     AdditionalLimits?: list<AdditionalLimit>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
