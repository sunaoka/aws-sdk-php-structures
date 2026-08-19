<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $data
 * @property ActiveCertificateAuthority|null $active
 */
class Certificate extends Shape
{
    /**
     * @param array{
     *     data?: string|null,
     *     active?: ActiveCertificateAuthority|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
