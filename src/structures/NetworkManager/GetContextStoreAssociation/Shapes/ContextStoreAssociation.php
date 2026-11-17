<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetContextStoreAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContextStoreId
 * @property string|null $TransitGatewayArn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property 'ASSOCIATING'|'ASSOCIATED'|'DISASSOCIATING'|'FAILED'|null $State
 */
class ContextStoreAssociation extends Shape
{
    /**
     * @param array{
     *     ContextStoreId?: string|null,
     *     TransitGatewayArn?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     State?: 'ASSOCIATING'|'ASSOCIATED'|'DISASSOCIATING'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
