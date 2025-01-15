<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateReplicationGroupMemberAction|null $Create
 * @property UpdateReplicationGroupMemberAction|null $Update
 * @property DeleteReplicationGroupMemberAction|null $Delete
 */
class ReplicationGroupUpdate extends Shape
{
    /**
     * @param array{
     *     Create?: CreateReplicationGroupMemberAction|null,
     *     Update?: UpdateReplicationGroupMemberAction|null,
     *     Delete?: DeleteReplicationGroupMemberAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
