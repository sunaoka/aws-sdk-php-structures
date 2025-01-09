<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $secretName
 */
class TlsValidationContextSdsTrust extends Shape
{
    /**
     * @param array{secretName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
