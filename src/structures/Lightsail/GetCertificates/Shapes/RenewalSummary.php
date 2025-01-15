<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DomainValidationRecord>|null $domainValidationRecords
 * @property 'PendingAutoRenewal'|'PendingValidation'|'Success'|'Failed'|null $renewalStatus
 * @property string|null $renewalStatusReason
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class RenewalSummary extends Shape
{
    /**
     * @param array{
     *     domainValidationRecords?: list<DomainValidationRecord>|null,
     *     renewalStatus?: 'PendingAutoRenewal'|'PendingValidation'|'Success'|'Failed'|null,
     *     renewalStatusReason?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
