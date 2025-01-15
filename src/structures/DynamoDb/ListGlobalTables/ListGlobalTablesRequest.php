<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListGlobalTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ExclusiveStartGlobalTableName
 * @property int<1, max>|null $Limit
 * @property string|null $RegionName
 */
class ListGlobalTablesRequest extends Request
{
    /**
     * @param array{
     *     ExclusiveStartGlobalTableName?: string|null,
     *     Limit?: int<1, max>|null,
     *     RegionName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
