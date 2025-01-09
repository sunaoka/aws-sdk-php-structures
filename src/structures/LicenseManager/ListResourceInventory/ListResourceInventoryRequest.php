<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListResourceInventory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property list<Shapes\InventoryFilter> $Filters
 */
class ListResourceInventoryRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Filters?: list<Shapes\InventoryFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
