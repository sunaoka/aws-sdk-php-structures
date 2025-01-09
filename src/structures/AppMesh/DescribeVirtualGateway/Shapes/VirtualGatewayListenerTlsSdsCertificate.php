<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $secretName
 */
class VirtualGatewayListenerTlsSdsCertificate extends Shape
{
    /**
     * @param array{secretName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
