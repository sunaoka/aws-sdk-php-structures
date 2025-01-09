<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayListenerTlsAcmCertificate $acm
 * @property VirtualGatewayListenerTlsFileCertificate $file
 * @property VirtualGatewayListenerTlsSdsCertificate $sds
 */
class VirtualGatewayListenerTlsCertificate extends Shape
{
    /**
     * @param array{
     *     acm?: VirtualGatewayListenerTlsAcmCertificate,
     *     file?: VirtualGatewayListenerTlsFileCertificate,
     *     sds?: VirtualGatewayListenerTlsSdsCertificate
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
