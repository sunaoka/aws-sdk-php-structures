<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExclusiveStartTableName
 * @property int<1, 100> $Limit
 */
class ListTablesRequest extends Request
{
    /**
     * @param array{
     *     ExclusiveStartTableName?: string,
     *     Limit?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
