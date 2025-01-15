<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ExclusiveStartTableName
 * @property int<1, 100>|null $Limit
 */
class ListTablesRequest extends Request
{
    /**
     * @param array{
     *     ExclusiveStartTableName?: string|null,
     *     Limit?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
