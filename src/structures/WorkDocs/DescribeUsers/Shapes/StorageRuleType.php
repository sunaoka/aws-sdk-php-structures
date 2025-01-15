<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $StorageAllocatedInBytes
 * @property 'UNLIMITED'|'QUOTA'|null $StorageType
 */
class StorageRuleType extends Shape
{
    /**
     * @param array{
     *     StorageAllocatedInBytes?: int<0, max>|null,
     *     StorageType?: 'UNLIMITED'|'QUOTA'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
