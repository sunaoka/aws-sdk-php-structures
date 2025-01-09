<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $awsPcaAuthorityArn
 */
class ServiceConnectTlsCertificateAuthority extends Shape
{
    /**
     * @param array{awsPcaAuthorityArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
