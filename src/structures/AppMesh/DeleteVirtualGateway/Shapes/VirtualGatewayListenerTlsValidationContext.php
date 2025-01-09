<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SubjectAlternativeNames $subjectAlternativeNames
 * @property VirtualGatewayListenerTlsValidationContextTrust $trust
 */
class VirtualGatewayListenerTlsValidationContext extends Shape
{
    /**
     * @param array{
     *     subjectAlternativeNames?: SubjectAlternativeNames,
     *     trust: VirtualGatewayListenerTlsValidationContextTrust
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
