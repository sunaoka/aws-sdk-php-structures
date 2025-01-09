<?php

namespace Sunaoka\Aws\Structures\DynamoDb\CreateGlobalTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalTableName
 * @property list<Shapes\Replica> $ReplicationGroup
 */
class CreateGlobalTableRequest extends Request
{
    /**
     * @param array{
     *     GlobalTableName: string,
     *     ReplicationGroup: list<Shapes\Replica>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
