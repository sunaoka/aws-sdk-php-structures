<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property 'EKS'|'CUSTOMER'|null $activatedBy
 */
class ActiveCertificateAuthority extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     activatedBy?: 'EKS'|'CUSTOMER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
