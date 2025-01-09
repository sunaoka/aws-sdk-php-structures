<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TlsValidationContextFileTrust $file
 * @property TlsValidationContextSdsTrust $sds
 */
class ListenerTlsValidationContextTrust extends Shape
{
    /**
     * @param array{
     *     file?: TlsValidationContextFileTrust,
     *     sds?: TlsValidationContextSdsTrust
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
