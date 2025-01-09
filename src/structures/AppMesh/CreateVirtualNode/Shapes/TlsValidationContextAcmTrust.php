<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $certificateAuthorityArns
 */
class TlsValidationContextAcmTrust extends Shape
{
    /**
     * @param array{certificateAuthorityArns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
