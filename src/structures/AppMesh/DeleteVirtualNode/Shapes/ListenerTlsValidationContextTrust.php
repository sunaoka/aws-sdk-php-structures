<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TlsValidationContextFileTrust|null $file
 * @property TlsValidationContextSdsTrust|null $sds
 */
class ListenerTlsValidationContextTrust extends Shape
{
    /**
     * @param array{
     *     file?: TlsValidationContextFileTrust|null,
     *     sds?: TlsValidationContextSdsTrust|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
