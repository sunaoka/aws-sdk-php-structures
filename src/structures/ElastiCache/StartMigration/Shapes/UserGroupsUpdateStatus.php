<?php

namespace Sunaoka\Aws\Structures\ElastiCache\StartMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $UserGroupIdsToAdd
 * @property list<string> $UserGroupIdsToRemove
 */
class UserGroupsUpdateStatus extends Shape
{
    /**
     * @param array{
     *     UserGroupIdsToAdd?: list<string>,
     *     UserGroupIdsToRemove?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
