<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListContextStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContextStoreId
 * @property string $ContextStoreOwnerAccountId
 */
class ContextStore extends Shape
{
    /**
     * @param array{
     *     ContextStoreId: string,
     *     ContextStoreOwnerAccountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
