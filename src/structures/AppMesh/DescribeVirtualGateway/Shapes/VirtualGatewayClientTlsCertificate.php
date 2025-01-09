<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayListenerTlsFileCertificate $file
 * @property VirtualGatewayListenerTlsSdsCertificate $sds
 */
class VirtualGatewayClientTlsCertificate extends Shape
{
    /**
     * @param array{
     *     file?: VirtualGatewayListenerTlsFileCertificate,
     *     sds?: VirtualGatewayListenerTlsSdsCertificate
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
