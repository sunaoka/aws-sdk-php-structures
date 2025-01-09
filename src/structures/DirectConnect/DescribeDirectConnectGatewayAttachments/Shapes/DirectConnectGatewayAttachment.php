<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeDirectConnectGatewayAttachments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $directConnectGatewayId
 * @property string $virtualInterfaceId
 * @property string $virtualInterfaceRegion
 * @property string $virtualInterfaceOwnerAccount
 * @property 'attaching'|'attached'|'detaching'|'detached' $attachmentState
 * @property 'TransitVirtualInterface'|'PrivateVirtualInterface' $attachmentType
 * @property string $stateChangeError
 */
class DirectConnectGatewayAttachment extends Shape
{
    /**
     * @param array{
     *     directConnectGatewayId?: string,
     *     virtualInterfaceId?: string,
     *     virtualInterfaceRegion?: string,
     *     virtualInterfaceOwnerAccount?: string,
     *     attachmentState?: 'attaching'|'attached'|'detaching'|'detached',
     *     attachmentType?: 'TransitVirtualInterface'|'PrivateVirtualInterface',
     *     stateChangeError?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
