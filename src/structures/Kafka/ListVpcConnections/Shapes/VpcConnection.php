<?php

namespace Sunaoka\Aws\Structures\Kafka\ListVpcConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcConnectionArn
 * @property string $TargetClusterArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $Authentication
 * @property string $VpcId
 * @property 'CREATING'|'AVAILABLE'|'INACTIVE'|'DEACTIVATING'|'DELETING'|'FAILED'|'REJECTED'|'REJECTING' $State
 */
class VpcConnection extends Shape
{
    /**
     * @param array{
     *     VpcConnectionArn: string,
     *     TargetClusterArn: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     Authentication?: string,
     *     VpcId?: string,
     *     State?: 'CREATING'|'AVAILABLE'|'INACTIVE'|'DEACTIVATING'|'DELETING'|'FAILED'|'REJECTED'|'REJECTING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
