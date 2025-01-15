<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $domainName
 * @property 'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED'|null $status
 * @property string|null $serialNumber
 * @property list<string>|null $subjectAlternativeNames
 * @property list<DomainValidationRecord>|null $domainValidationRecords
 * @property string|null $requestFailureReason
 * @property int|null $inUseResourceCount
 * @property string|null $keyAlgorithm
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $issuedAt
 * @property string|null $issuerCA
 * @property \Aws\Api\DateTimeResult|null $notBefore
 * @property \Aws\Api\DateTimeResult|null $notAfter
 * @property string|null $eligibleToRenew
 * @property RenewalSummary|null $renewalSummary
 * @property \Aws\Api\DateTimeResult|null $revokedAt
 * @property string|null $revocationReason
 * @property list<Tag>|null $tags
 * @property string|null $supportCode
 */
class Certificate extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     domainName?: string|null,
     *     status?: 'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED'|null,
     *     serialNumber?: string|null,
     *     subjectAlternativeNames?: list<string>|null,
     *     domainValidationRecords?: list<DomainValidationRecord>|null,
     *     requestFailureReason?: string|null,
     *     inUseResourceCount?: int|null,
     *     keyAlgorithm?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     issuedAt?: \Aws\Api\DateTimeResult|null,
     *     issuerCA?: string|null,
     *     notBefore?: \Aws\Api\DateTimeResult|null,
     *     notAfter?: \Aws\Api\DateTimeResult|null,
     *     eligibleToRenew?: string|null,
     *     renewalSummary?: RenewalSummary|null,
     *     revokedAt?: \Aws\Api\DateTimeResult|null,
     *     revocationReason?: string|null,
     *     tags?: list<Tag>|null,
     *     supportCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
