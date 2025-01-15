<?php

namespace Sunaoka\Aws\Structures\Ssm\ListInventoryEntries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $TypeName
 * @property list<Shapes\InventoryFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class ListInventoryEntriesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     TypeName: string,
     *     Filters?: list<Shapes\InventoryFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
