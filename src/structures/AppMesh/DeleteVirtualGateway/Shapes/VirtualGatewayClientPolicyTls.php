<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayClientTlsCertificate $certificate
 * @property bool $enforce
 * @property list<int> $ports
 * @property VirtualGatewayTlsValidationContext $validation
 */
class VirtualGatewayClientPolicyTls extends Shape
{
    /**
     * @param array{
     *     certificate?: VirtualGatewayClientTlsCertificate,
     *     enforce?: bool,
     *     ports?: list<int>,
     *     validation: VirtualGatewayTlsValidationContext
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
