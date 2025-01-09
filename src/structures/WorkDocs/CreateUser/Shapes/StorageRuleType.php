<?php

namespace Sunaoka\Aws\Structures\WorkDocs\CreateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $StorageAllocatedInBytes
 * @property 'UNLIMITED'|'QUOTA' $StorageType
 */
class StorageRuleType extends Shape
{
    /**
     * @param array{
     *     StorageAllocatedInBytes?: int,
     *     StorageType?: 'UNLIMITED'|'QUOTA'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
