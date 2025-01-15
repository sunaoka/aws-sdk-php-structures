<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CompleteMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $UserGroupIdsToAdd
 * @property list<string>|null $UserGroupIdsToRemove
 */
class UserGroupsUpdateStatus extends Shape
{
    /**
     * @param array{
     *     UserGroupIdsToAdd?: list<string>|null,
     *     UserGroupIdsToRemove?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
