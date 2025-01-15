<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeActivities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $StorageUtilizedInBytes
 * @property StorageRuleType|null $StorageRule
 */
class UserStorageMetadata extends Shape
{
    /**
     * @param array{
     *     StorageUtilizedInBytes?: int|null,
     *     StorageRule?: StorageRuleType|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
