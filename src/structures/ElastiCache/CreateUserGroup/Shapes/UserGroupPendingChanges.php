<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateUserGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $UserIdsToRemove
 * @property list<string>|null $UserIdsToAdd
 */
class UserGroupPendingChanges extends Shape
{
    /**
     * @param array{
     *     UserIdsToRemove?: list<string>|null,
     *     UserIdsToAdd?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
