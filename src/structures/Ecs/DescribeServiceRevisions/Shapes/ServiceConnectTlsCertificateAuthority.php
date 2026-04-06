<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $awsPcaAuthorityArn
 */
class ServiceConnectTlsCertificateAuthority extends Shape
{
    /**
     * @param array{awsPcaAuthorityArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
