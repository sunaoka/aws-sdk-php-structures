<?php

namespace Sunaoka\Aws\Structures\WorkDocs\ActivateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $StorageUtilizedInBytes
 * @property StorageRuleType $StorageRule
 */
class UserStorageMetadata extends Shape
{
    /**
     * @param array{
     *     StorageUtilizedInBytes?: int,
     *     StorageRule?: StorageRuleType
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
