<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayTlsValidationContextFileTrust|null $file
 * @property VirtualGatewayTlsValidationContextSdsTrust|null $sds
 */
class VirtualGatewayListenerTlsValidationContextTrust extends Shape
{
    /**
     * @param array{
     *     file?: VirtualGatewayTlsValidationContextFileTrust|null,
     *     sds?: VirtualGatewayTlsValidationContextSdsTrust|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
