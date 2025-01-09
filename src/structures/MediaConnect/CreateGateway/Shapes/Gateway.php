<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $EgressCidrBlocks
 * @property string $GatewayArn
 * @property list<MessageDetail> $GatewayMessages
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'ERROR'|'DELETING'|'DELETED' $GatewayState
 * @property string $Name
 * @property list<GatewayNetwork> $Networks
 */
class Gateway extends Shape
{
    /**
     * @param array{
     *     EgressCidrBlocks: list<string>,
     *     GatewayArn: string,
     *     GatewayMessages?: list<MessageDetail>,
     *     GatewayState?: 'CREATING'|'ACTIVE'|'UPDATING'|'ERROR'|'DELETING'|'DELETED',
     *     Name: string,
     *     Networks: list<GatewayNetwork>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
