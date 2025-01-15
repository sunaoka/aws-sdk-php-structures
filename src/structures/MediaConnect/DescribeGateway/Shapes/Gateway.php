<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $EgressCidrBlocks
 * @property string $GatewayArn
 * @property list<MessageDetail>|null $GatewayMessages
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'ERROR'|'DELETING'|'DELETED'|null $GatewayState
 * @property string $Name
 * @property list<GatewayNetwork> $Networks
 */
class Gateway extends Shape
{
    /**
     * @param array{
     *     EgressCidrBlocks: list<string>,
     *     GatewayArn: string,
     *     GatewayMessages?: list<MessageDetail>|null,
     *     GatewayState?: 'CREATING'|'ACTIVE'|'UPDATING'|'ERROR'|'DELETING'|'DELETED'|null,
     *     Name: string,
     *     Networks: list<GatewayNetwork>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
