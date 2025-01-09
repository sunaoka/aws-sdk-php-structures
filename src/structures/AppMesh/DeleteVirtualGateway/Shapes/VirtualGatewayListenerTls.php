<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayListenerTlsCertificate $certificate
 * @property 'STRICT'|'PERMISSIVE'|'DISABLED' $mode
 * @property VirtualGatewayListenerTlsValidationContext $validation
 */
class VirtualGatewayListenerTls extends Shape
{
    /**
     * @param array{
     *     certificate: VirtualGatewayListenerTlsCertificate,
     *     mode: 'STRICT'|'PERMISSIVE'|'DISABLED',
     *     validation?: VirtualGatewayListenerTlsValidationContext
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
