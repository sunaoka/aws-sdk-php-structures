<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateGlobalTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateReplicaAction $Create
 * @property DeleteReplicaAction $Delete
 */
class ReplicaUpdate extends Shape
{
    /**
     * @param array{
     *     Create?: CreateReplicaAction,
     *     Delete?: DeleteReplicaAction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
