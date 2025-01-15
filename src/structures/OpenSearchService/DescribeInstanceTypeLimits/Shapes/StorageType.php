<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeInstanceTypeLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StorageTypeName
 * @property string|null $StorageSubTypeName
 * @property list<StorageTypeLimit>|null $StorageTypeLimits
 */
class StorageType extends Shape
{
    /**
     * @param array{
     *     StorageTypeName?: string|null,
     *     StorageSubTypeName?: string|null,
     *     StorageTypeLimits?: list<StorageTypeLimit>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
