<?php

namespace Sunaoka\Aws\Structures\Acm\SearchCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property bool|null $Exported
 * @property \Aws\Api\DateTimeResult|null $ImportedAt
 * @property bool|null $InUse
 * @property \Aws\Api\DateTimeResult|null $IssuedAt
 * @property 'ELIGIBLE'|'INELIGIBLE'|null $RenewalEligibility
 * @property \Aws\Api\DateTimeResult|null $RevokedAt
 * @property 'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED'|null $Status
 * @property 'PENDING_AUTO_RENEWAL'|'PENDING_VALIDATION'|'SUCCESS'|'FAILED'|null $RenewalStatus
 * @property 'IMPORTED'|'AMAZON_ISSUED'|'PRIVATE'|null $Type
 * @property 'ENABLED'|'DISABLED'|null $ExportOption
 * @property 'CLOUDFRONT'|null $ManagedBy
 * @property 'EMAIL'|'DNS'|'HTTP'|null $ValidationMethod
 */
class AcmCertificateMetadata extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     Exported?: bool|null,
     *     ImportedAt?: \Aws\Api\DateTimeResult|null,
     *     InUse?: bool|null,
     *     IssuedAt?: \Aws\Api\DateTimeResult|null,
     *     RenewalEligibility?: 'ELIGIBLE'|'INELIGIBLE'|null,
     *     RevokedAt?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED'|null,
     *     RenewalStatus?: 'PENDING_AUTO_RENEWAL'|'PENDING_VALIDATION'|'SUCCESS'|'FAILED'|null,
     *     Type?: 'IMPORTED'|'AMAZON_ISSUED'|'PRIVATE'|null,
     *     ExportOption?: 'ENABLED'|'DISABLED'|null,
     *     ManagedBy?: 'CLOUDFRONT'|null,
     *     ValidationMethod?: 'EMAIL'|'DNS'|'HTTP'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
