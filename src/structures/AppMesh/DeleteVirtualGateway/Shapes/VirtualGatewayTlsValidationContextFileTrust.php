<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $certificateChain
 */
class VirtualGatewayTlsValidationContextFileTrust extends Shape
{
    /**
     * @param array{certificateChain: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
