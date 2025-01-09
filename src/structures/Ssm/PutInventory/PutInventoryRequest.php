<?php

namespace Sunaoka\Aws\Structures\Ssm\PutInventory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property list<Shapes\InventoryItem> $Items
 */
class PutInventoryRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Items: list<Shapes\InventoryItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
