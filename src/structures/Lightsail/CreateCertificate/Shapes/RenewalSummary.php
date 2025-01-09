<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DomainValidationRecord> $domainValidationRecords
 * @property 'PendingAutoRenewal'|'PendingValidation'|'Success'|'Failed' $renewalStatus
 * @property string $renewalStatusReason
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class RenewalSummary extends Shape
{
    /**
     * @param array{
     *     domainValidationRecords?: list<DomainValidationRecord>,
     *     renewalStatus?: 'PendingAutoRenewal'|'PendingValidation'|'Success'|'Failed',
     *     renewalStatusReason?: string,
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
