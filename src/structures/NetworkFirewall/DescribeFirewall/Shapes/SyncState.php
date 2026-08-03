<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attachment|null $Attachment
 * @property array<string, PerObjectStatus>|null $Config
 * @property list<NatGatewayAttachment>|null $NatGatewayAttachments
 */
class SyncState extends Shape
{
    /**
     * @param array{
     *     Attachment?: Attachment|null,
     *     Config?: array<string, PerObjectStatus>|null,
     *     NatGatewayAttachments?: list<NatGatewayAttachment>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
