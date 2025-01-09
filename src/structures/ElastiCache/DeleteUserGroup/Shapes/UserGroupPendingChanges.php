<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteUserGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $UserIdsToRemove
 * @property list<string> $UserIdsToAdd
 */
class UserGroupPendingChanges extends Shape
{
    /**
     * @param array{
     *     UserIdsToRemove?: list<string>,
     *     UserIdsToAdd?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
