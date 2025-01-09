<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClientTlsCertificate $certificate
 * @property bool $enforce
 * @property list<int<1, 65535>> $ports
 * @property TlsValidationContext $validation
 */
class ClientPolicyTls extends Shape
{
    /**
     * @param array{
     *     certificate?: ClientTlsCertificate,
     *     enforce?: bool,
     *     ports?: list<int<1, 65535>>,
     *     validation: TlsValidationContext
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
