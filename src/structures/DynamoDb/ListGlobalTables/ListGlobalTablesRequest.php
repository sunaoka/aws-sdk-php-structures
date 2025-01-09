<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListGlobalTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExclusiveStartGlobalTableName
 * @property int<1, max> $Limit
 * @property string $RegionName
 */
class ListGlobalTablesRequest extends Request
{
    /**
     * @param array{
     *     ExclusiveStartGlobalTableName?: string,
     *     Limit?: int<1, max>,
     *     RegionName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
