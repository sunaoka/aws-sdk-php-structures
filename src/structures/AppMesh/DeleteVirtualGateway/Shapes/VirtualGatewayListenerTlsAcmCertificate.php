<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $certificateArn
 */
class VirtualGatewayListenerTlsAcmCertificate extends Shape
{
    /**
     * @param array{certificateArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
