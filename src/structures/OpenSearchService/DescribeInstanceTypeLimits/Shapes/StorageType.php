<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeInstanceTypeLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StorageTypeName
 * @property string $StorageSubTypeName
 * @property list<StorageTypeLimit> $StorageTypeLimits
 */
class StorageType extends Shape
{
    /**
     * @param array{
     *     StorageTypeName?: string,
     *     StorageSubTypeName?: string,
     *     StorageTypeLimits?: list<StorageTypeLimit>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
