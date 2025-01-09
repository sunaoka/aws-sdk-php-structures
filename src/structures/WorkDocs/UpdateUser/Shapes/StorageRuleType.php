<?php

namespace Sunaoka\Aws\Structures\WorkDocs\UpdateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $StorageAllocatedInBytes
 * @property 'UNLIMITED'|'QUOTA' $StorageType
 */
class StorageRuleType extends Shape
{
    /**
     * @param array{
     *     StorageAllocatedInBytes?: int<0, max>,
     *     StorageType?: 'UNLIMITED'|'QUOTA'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
