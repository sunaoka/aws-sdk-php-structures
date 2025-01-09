<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateReplicationGroupMemberAction $Create
 * @property UpdateReplicationGroupMemberAction $Update
 * @property DeleteReplicationGroupMemberAction $Delete
 */
class ReplicationGroupUpdate extends Shape
{
    /**
     * @param array{
     *     Create?: CreateReplicationGroupMemberAction,
     *     Update?: UpdateReplicationGroupMemberAction,
     *     Delete?: DeleteReplicationGroupMemberAction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
