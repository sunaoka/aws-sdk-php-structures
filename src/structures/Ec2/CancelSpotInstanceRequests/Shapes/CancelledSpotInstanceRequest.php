<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelSpotInstanceRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SpotInstanceRequestId
 * @property 'active'|'open'|'closed'|'cancelled'|'completed'|null $State
 */
class CancelledSpotInstanceRequest extends Shape
{
    /**
     * @param array{
     *     SpotInstanceRequestId?: string|null,
     *     State?: 'active'|'open'|'closed'|'cancelled'|'completed'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
