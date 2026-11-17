<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListContextStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GlobalNetworkId
 * @property string|null $ContextStoreId
 * @property string|null $ContextStoreArn
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property 'PENDING'|'AVAILABLE'|'UPDATING'|'DELETING'|'DELETED'|null $State
 * @property list<Tag>|null $Tags
 */
class ContextStore extends Shape
{
    /**
     * @param array{
     *     GlobalNetworkId?: string|null,
     *     ContextStoreId?: string|null,
     *     ContextStoreArn?: string|null,
     *     Description?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     State?: 'PENDING'|'AVAILABLE'|'UPDATING'|'DELETING'|'DELETED'|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
