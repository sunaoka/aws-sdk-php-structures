<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TlsValidationContextAcmTrust $acm
 * @property TlsValidationContextFileTrust $file
 * @property TlsValidationContextSdsTrust $sds
 */
class TlsValidationContextTrust extends Shape
{
    /**
     * @param array{
     *     acm?: TlsValidationContextAcmTrust,
     *     file?: TlsValidationContextFileTrust,
     *     sds?: TlsValidationContextSdsTrust
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
