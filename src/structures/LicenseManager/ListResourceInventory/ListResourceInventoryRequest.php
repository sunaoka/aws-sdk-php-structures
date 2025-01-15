<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListResourceInventory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\InventoryFilter>|null $Filters
 */
class ListResourceInventoryRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\InventoryFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
