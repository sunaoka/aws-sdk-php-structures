<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateEgressOnlyInternetGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'attaching'|'attached'|'detaching'|'detached'|null $State
 * @property string|null $VpcId
 */
class InternetGatewayAttachment extends Shape
{
    /**
     * @param array{
     *     State?: 'attaching'|'attached'|'detaching'|'detached'|null,
     *     VpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
