<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClientVpcConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Authentication
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property 'CREATING'|'AVAILABLE'|'INACTIVE'|'DEACTIVATING'|'DELETING'|'FAILED'|'REJECTED'|'REJECTING' $State
 * @property string $VpcConnectionArn
 * @property string $Owner
 */
class ClientVpcConnection extends Shape
{
    /**
     * @param array{
     *     Authentication?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     State?: 'CREATING'|'AVAILABLE'|'INACTIVE'|'DEACTIVATING'|'DELETING'|'FAILED'|'REJECTED'|'REJECTING',
     *     VpcConnectionArn: string,
     *     Owner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
