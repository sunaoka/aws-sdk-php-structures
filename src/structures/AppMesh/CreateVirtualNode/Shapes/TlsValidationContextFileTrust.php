<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $certificateChain
 */
class TlsValidationContextFileTrust extends Shape
{
    /**
     * @param array{certificateChain: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
