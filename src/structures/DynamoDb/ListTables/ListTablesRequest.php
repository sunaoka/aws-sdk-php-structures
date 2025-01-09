<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExclusiveStartTableName
 * @property int $Limit
 */
class ListTablesRequest extends Request
{
    /**
     * @param array{
     *     ExclusiveStartTableName?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
