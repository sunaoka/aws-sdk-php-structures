<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NatGatewayId
 * @property 'CREATING'|'READY'|'UPDATING'|'FAILED'|'DELETING' $Status
 * @property string|null $StatusMessage
 * @property string|null $DnsName
 */
class NatGatewayAttachment extends Shape
{
    /**
     * @param array{
     *     NatGatewayId: string,
     *     Status: 'CREATING'|'READY'|'UPDATING'|'FAILED'|'DELETING',
     *     StatusMessage?: string|null,
     *     DnsName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
