<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $certificateArn
 */
class ListenerTlsAcmCertificate extends Shape
{
    /**
     * @param array{certificateArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
