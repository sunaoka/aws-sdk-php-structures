<?php

namespace Sunaoka\Aws\Structures\EKS\ListCertificateAuthorities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property 'EKS'|'CUSTOMER'|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $activatedAt
 * @property 'EKS'|'CUSTOMER'|null $activatedBy
 * @property 'NOT_USED'|'ACTIVATING'|'IN_USE'|null $signingStatus
 * @property 'IN_PROGRESS'|'COMPLETE'|'FAILED'|'DELETING'|null $distributionStatus
 */
class CertificateAuthoritySummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: 'EKS'|'CUSTOMER'|null,
     *     activatedAt?: \Aws\Api\DateTimeResult|null,
     *     activatedBy?: 'EKS'|'CUSTOMER'|null,
     *     signingStatus?: 'NOT_USED'|'ACTIVATING'|'IN_USE'|null,
     *     distributionStatus?: 'IN_PROGRESS'|'COMPLETE'|'FAILED'|'DELETING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
