<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ListenerTlsCertificate $certificate
 * @property 'STRICT'|'PERMISSIVE'|'DISABLED' $mode
 * @property ListenerTlsValidationContext $validation
 */
class ListenerTls extends Shape
{
    /**
     * @param array{
     *     certificate: ListenerTlsCertificate,
     *     mode: 'STRICT'|'PERMISSIVE'|'DISABLED',
     *     validation?: ListenerTlsValidationContext
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
