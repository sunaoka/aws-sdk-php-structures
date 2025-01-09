<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpnGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcId
 * @property 'attaching'|'attached'|'detaching'|'detached' $State
 */
class VpcAttachment extends Shape
{
    /**
     * @param array{
     *     VpcId?: string,
     *     State?: 'attaching'|'attached'|'detaching'|'detached'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
