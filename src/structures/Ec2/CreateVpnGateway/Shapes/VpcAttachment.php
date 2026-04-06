<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpnGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcId
 * @property 'attaching'|'attached'|'detaching'|'detached'|null $State
 */
class VpcAttachment extends Shape
{
    /**
     * @param array{
     *     VpcId?: string|null,
     *     State?: 'attaching'|'attached'|'detaching'|'detached'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
