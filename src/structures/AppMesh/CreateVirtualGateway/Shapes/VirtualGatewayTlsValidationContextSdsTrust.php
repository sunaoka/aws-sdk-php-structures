<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $secretName
 */
class VirtualGatewayTlsValidationContextSdsTrust extends Shape
{
    /**
     * @param array{secretName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
