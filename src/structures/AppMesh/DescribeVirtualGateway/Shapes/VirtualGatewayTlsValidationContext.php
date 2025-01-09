<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SubjectAlternativeNames $subjectAlternativeNames
 * @property VirtualGatewayTlsValidationContextTrust $trust
 */
class VirtualGatewayTlsValidationContext extends Shape
{
    /**
     * @param array{
     *     subjectAlternativeNames?: SubjectAlternativeNames,
     *     trust: VirtualGatewayTlsValidationContextTrust
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
