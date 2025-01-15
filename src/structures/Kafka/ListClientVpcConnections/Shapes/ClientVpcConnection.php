<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClientVpcConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Authentication
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property 'CREATING'|'AVAILABLE'|'INACTIVE'|'DEACTIVATING'|'DELETING'|'FAILED'|'REJECTED'|'REJECTING'|null $State
 * @property string $VpcConnectionArn
 * @property string|null $Owner
 */
class ClientVpcConnection extends Shape
{
    /**
     * @param array{
     *     Authentication?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     State?: 'CREATING'|'AVAILABLE'|'INACTIVE'|'DEACTIVATING'|'DELETING'|'FAILED'|'REJECTED'|'REJECTING'|null,
     *     VpcConnectionArn: string,
     *     Owner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
