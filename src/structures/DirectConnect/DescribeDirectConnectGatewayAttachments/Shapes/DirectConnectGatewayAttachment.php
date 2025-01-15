<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeDirectConnectGatewayAttachments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $directConnectGatewayId
 * @property string|null $virtualInterfaceId
 * @property string|null $virtualInterfaceRegion
 * @property string|null $virtualInterfaceOwnerAccount
 * @property 'attaching'|'attached'|'detaching'|'detached'|null $attachmentState
 * @property 'TransitVirtualInterface'|'PrivateVirtualInterface'|null $attachmentType
 * @property string|null $stateChangeError
 */
class DirectConnectGatewayAttachment extends Shape
{
    /**
     * @param array{
     *     directConnectGatewayId?: string|null,
     *     virtualInterfaceId?: string|null,
     *     virtualInterfaceRegion?: string|null,
     *     virtualInterfaceOwnerAccount?: string|null,
     *     attachmentState?: 'attaching'|'attached'|'detaching'|'detached'|null,
     *     attachmentType?: 'TransitVirtualInterface'|'PrivateVirtualInterface'|null,
     *     stateChangeError?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
