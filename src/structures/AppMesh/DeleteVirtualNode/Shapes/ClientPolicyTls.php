<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClientTlsCertificate|null $certificate
 * @property bool|null $enforce
 * @property list<int<1, 65535>>|null $ports
 * @property TlsValidationContext $validation
 */
class ClientPolicyTls extends Shape
{
    /**
     * @param array{
     *     certificate?: ClientTlsCertificate|null,
     *     enforce?: bool|null,
     *     ports?: list<int<1, 65535>>|null,
     *     validation: TlsValidationContext
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
