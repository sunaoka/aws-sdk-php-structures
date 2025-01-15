<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateGlobalTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateReplicaAction|null $Create
 * @property DeleteReplicaAction|null $Delete
 */
class ReplicaUpdate extends Shape
{
    /**
     * @param array{
     *     Create?: CreateReplicaAction|null,
     *     Delete?: DeleteReplicaAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
