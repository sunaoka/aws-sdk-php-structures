<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClientTlsCertificate $certificate
 * @property bool $enforce
 * @property list<int> $ports
 * @property TlsValidationContext $validation
 */
class ClientPolicyTls extends Shape
{
    /**
     * @param array{
     *     certificate?: ClientTlsCertificate,
     *     enforce?: bool,
     *     ports?: list<int>,
     *     validation: TlsValidationContext
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
