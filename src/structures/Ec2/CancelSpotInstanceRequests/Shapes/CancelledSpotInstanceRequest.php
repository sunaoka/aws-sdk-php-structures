<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelSpotInstanceRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SpotInstanceRequestId
 * @property 'active'|'open'|'closed'|'cancelled'|'completed' $State
 */
class CancelledSpotInstanceRequest extends Shape
{
    /**
     * @param array{
     *     SpotInstanceRequestId?: string,
     *     State?: 'active'|'open'|'closed'|'cancelled'|'completed'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
