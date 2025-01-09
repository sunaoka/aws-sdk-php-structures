<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListGlobalTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExclusiveStartGlobalTableName
 * @property int $Limit
 * @property string $RegionName
 */
class ListGlobalTablesRequest extends Request
{
    /**
     * @param array{
     *     ExclusiveStartGlobalTableName?: string,
     *     Limit?: int,
     *     RegionName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
