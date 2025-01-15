<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayClientTlsCertificate|null $certificate
 * @property bool|null $enforce
 * @property list<int<1, 65535>>|null $ports
 * @property VirtualGatewayTlsValidationContext $validation
 */
class VirtualGatewayClientPolicyTls extends Shape
{
    /**
     * @param array{
     *     certificate?: VirtualGatewayClientTlsCertificate|null,
     *     enforce?: bool|null,
     *     ports?: list<int<1, 65535>>|null,
     *     validation: VirtualGatewayTlsValidationContext
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
