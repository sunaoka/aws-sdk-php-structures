<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $certificateAuthorityArns
 */
class VirtualGatewayTlsValidationContextAcmTrust extends Shape
{
    /**
     * @param array{certificateAuthorityArns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
