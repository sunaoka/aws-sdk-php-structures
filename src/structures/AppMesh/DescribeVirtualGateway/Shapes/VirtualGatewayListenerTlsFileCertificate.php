<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $certificateChain
 * @property string $privateKey
 */
class VirtualGatewayListenerTlsFileCertificate extends Shape
{
    /**
     * @param array{
     *     certificateChain: string,
     *     privateKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
