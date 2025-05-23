<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SubjectAlternativeNames|null $subjectAlternativeNames
 * @property VirtualGatewayTlsValidationContextTrust $trust
 */
class VirtualGatewayTlsValidationContext extends Shape
{
    /**
     * @param array{
     *     subjectAlternativeNames?: SubjectAlternativeNames|null,
     *     trust: VirtualGatewayTlsValidationContextTrust
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
