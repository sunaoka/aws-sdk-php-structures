<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SubjectAlternativeNames $subjectAlternativeNames
 * @property ListenerTlsValidationContextTrust $trust
 */
class ListenerTlsValidationContext extends Shape
{
    /**
     * @param array{
     *     subjectAlternativeNames?: SubjectAlternativeNames,
     *     trust: ListenerTlsValidationContextTrust
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
