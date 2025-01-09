<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayTlsValidationContextAcmTrust $acm
 * @property VirtualGatewayTlsValidationContextFileTrust $file
 * @property VirtualGatewayTlsValidationContextSdsTrust $sds
 */
class VirtualGatewayTlsValidationContextTrust extends Shape
{
    /**
     * @param array{
     *     acm?: VirtualGatewayTlsValidationContextAcmTrust,
     *     file?: VirtualGatewayTlsValidationContextFileTrust,
     *     sds?: VirtualGatewayTlsValidationContextSdsTrust
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
