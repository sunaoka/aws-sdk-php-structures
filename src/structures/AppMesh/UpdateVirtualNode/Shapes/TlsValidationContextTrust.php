<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TlsValidationContextAcmTrust|null $acm
 * @property TlsValidationContextFileTrust|null $file
 * @property TlsValidationContextSdsTrust|null $sds
 */
class TlsValidationContextTrust extends Shape
{
    /**
     * @param array{
     *     acm?: TlsValidationContextAcmTrust|null,
     *     file?: TlsValidationContextFileTrust|null,
     *     sds?: TlsValidationContextSdsTrust|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
