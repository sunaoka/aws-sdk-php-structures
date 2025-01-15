<?php

namespace Sunaoka\Aws\Structures\Kafka\ListVpcConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcConnectionArn
 * @property string $TargetClusterArn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $Authentication
 * @property string|null $VpcId
 * @property 'CREATING'|'AVAILABLE'|'INACTIVE'|'DEACTIVATING'|'DELETING'|'FAILED'|'REJECTED'|'REJECTING'|null $State
 */
class VpcConnection extends Shape
{
    /**
     * @param array{
     *     VpcConnectionArn: string,
     *     TargetClusterArn: string,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Authentication?: string|null,
     *     VpcId?: string|null,
     *     State?: 'CREATING'|'AVAILABLE'|'INACTIVE'|'DEACTIVATING'|'DELETING'|'FAILED'|'REJECTED'|'REJECTING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
