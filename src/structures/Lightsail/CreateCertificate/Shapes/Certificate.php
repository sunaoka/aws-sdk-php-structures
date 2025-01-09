<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $domainName
 * @property 'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED' $status
 * @property string $serialNumber
 * @property list<string> $subjectAlternativeNames
 * @property list<DomainValidationRecord> $domainValidationRecords
 * @property string $requestFailureReason
 * @property int $inUseResourceCount
 * @property string $keyAlgorithm
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $issuedAt
 * @property string $issuerCA
 * @property \Aws\Api\DateTimeResult $notBefore
 * @property \Aws\Api\DateTimeResult $notAfter
 * @property string $eligibleToRenew
 * @property RenewalSummary $renewalSummary
 * @property \Aws\Api\DateTimeResult $revokedAt
 * @property string $revocationReason
 * @property list<Tag> $tags
 * @property string $supportCode
 */
class Certificate extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     domainName?: string,
     *     status?: 'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED',
     *     serialNumber?: string,
     *     subjectAlternativeNames?: list<string>,
     *     domainValidationRecords?: list<DomainValidationRecord>,
     *     requestFailureReason?: string,
     *     inUseResourceCount?: int,
     *     keyAlgorithm?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     issuedAt?: \Aws\Api\DateTimeResult,
     *     issuerCA?: string,
     *     notBefore?: \Aws\Api\DateTimeResult,
     *     notAfter?: \Aws\Api\DateTimeResult,
     *     eligibleToRenew?: string,
     *     renewalSummary?: RenewalSummary,
     *     revokedAt?: \Aws\Api\DateTimeResult,
     *     revocationReason?: string,
     *     tags?: list<Tag>,
     *     supportCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
