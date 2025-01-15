<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayListenerTlsAcmCertificate|null $acm
 * @property VirtualGatewayListenerTlsFileCertificate|null $file
 * @property VirtualGatewayListenerTlsSdsCertificate|null $sds
 */
class VirtualGatewayListenerTlsCertificate extends Shape
{
    /**
     * @param array{
     *     acm?: VirtualGatewayListenerTlsAcmCertificate|null,
     *     file?: VirtualGatewayListenerTlsFileCertificate|null,
     *     sds?: VirtualGatewayListenerTlsSdsCertificate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
