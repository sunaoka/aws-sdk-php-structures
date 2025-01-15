<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayListenerTlsFileCertificate|null $file
 * @property VirtualGatewayListenerTlsSdsCertificate|null $sds
 */
class VirtualGatewayClientTlsCertificate extends Shape
{
    /**
     * @param array{
     *     file?: VirtualGatewayListenerTlsFileCertificate|null,
     *     sds?: VirtualGatewayListenerTlsSdsCertificate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
