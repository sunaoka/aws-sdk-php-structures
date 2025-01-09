<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GatewayArn
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'ERROR'|'DELETING'|'DELETED' $GatewayState
 * @property string $Name
 */
class ListedGateway extends Shape
{
    /**
     * @param array{
     *     GatewayArn: string,
     *     GatewayState: 'CREATING'|'ACTIVE'|'UPDATING'|'ERROR'|'DELETING'|'DELETED',
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
