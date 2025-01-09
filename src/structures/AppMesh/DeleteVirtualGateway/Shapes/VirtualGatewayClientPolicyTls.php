<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayClientTlsCertificate $certificate
 * @property bool $enforce
 * @property list<int<1, 65535>> $ports
 * @property VirtualGatewayTlsValidationContext $validation
 */
class VirtualGatewayClientPolicyTls extends Shape
{
    /**
     * @param array{
     *     certificate?: VirtualGatewayClientTlsCertificate,
     *     enforce?: bool,
     *     ports?: list<int<1, 65535>>,
     *     validation: VirtualGatewayTlsValidationContext
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
