<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayTlsValidationContextAcmTrust|null $acm
 * @property VirtualGatewayTlsValidationContextFileTrust|null $file
 * @property VirtualGatewayTlsValidationContextSdsTrust|null $sds
 */
class VirtualGatewayTlsValidationContextTrust extends Shape
{
    /**
     * @param array{
     *     acm?: VirtualGatewayTlsValidationContextAcmTrust|null,
     *     file?: VirtualGatewayTlsValidationContextFileTrust|null,
     *     sds?: VirtualGatewayTlsValidationContextSdsTrust|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
