<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeCertificateAuthority\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property 'EKS'|'CUSTOMER'|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $activatedAt
 * @property 'EKS'|'CUSTOMER'|null $activatedBy
 * @property 'NOT_USED'|'ACTIVATING'|'IN_USE'|null $signingStatus
 * @property 'IN_PROGRESS'|'COMPLETE'|'FAILED'|'DELETING'|null $distributionStatus
 * @property CertificateAuthorityValidity|null $validity
 * @property CertificateAuthorityScheduledEvents|null $scheduledEvents
 * @property bool|null $rollbackAvailable
 * @property string|null $data
 */
class CertificateAuthority extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: 'EKS'|'CUSTOMER'|null,
     *     activatedAt?: \Aws\Api\DateTimeResult|null,
     *     activatedBy?: 'EKS'|'CUSTOMER'|null,
     *     signingStatus?: 'NOT_USED'|'ACTIVATING'|'IN_USE'|null,
     *     distributionStatus?: 'IN_PROGRESS'|'COMPLETE'|'FAILED'|'DELETING'|null,
     *     validity?: CertificateAuthorityValidity|null,
     *     scheduledEvents?: CertificateAuthorityScheduledEvents|null,
     *     rollbackAvailable?: bool|null,
     *     data?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
