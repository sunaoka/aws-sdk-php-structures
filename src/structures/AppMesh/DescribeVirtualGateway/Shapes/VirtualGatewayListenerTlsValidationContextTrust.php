<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayTlsValidationContextFileTrust $file
 * @property VirtualGatewayTlsValidationContextSdsTrust $sds
 */
class VirtualGatewayListenerTlsValidationContextTrust extends Shape
{
    /**
     * @param array{
     *     file?: VirtualGatewayTlsValidationContextFileTrust,
     *     sds?: VirtualGatewayTlsValidationContextSdsTrust
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
