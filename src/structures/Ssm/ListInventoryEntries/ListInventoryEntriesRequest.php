<?php

namespace Sunaoka\Aws\Structures\Ssm\ListInventoryEntries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $TypeName
 * @property list<Shapes\InventoryFilter> $Filters
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListInventoryEntriesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     TypeName: string,
     *     Filters?: list<Shapes\InventoryFilter>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
