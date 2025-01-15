<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayListenerTlsCertificate $certificate
 * @property 'STRICT'|'PERMISSIVE'|'DISABLED' $mode
 * @property VirtualGatewayListenerTlsValidationContext|null $validation
 */
class VirtualGatewayListenerTls extends Shape
{
    /**
     * @param array{
     *     certificate: VirtualGatewayListenerTlsCertificate,
     *     mode: 'STRICT'|'PERMISSIVE'|'DISABLED',
     *     validation?: VirtualGatewayListenerTlsValidationContext|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
