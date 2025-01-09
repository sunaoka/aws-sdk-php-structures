<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateGlobalTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalTableName
 * @property list<Shapes\ReplicaUpdate> $ReplicaUpdates
 */
class UpdateGlobalTableRequest extends Request
{
    /**
     * @param array{
     *     GlobalTableName: string,
     *     ReplicaUpdates: list<Shapes\ReplicaUpdate>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
