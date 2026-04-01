<?php

namespace Sunaoka\Aws\Structures\Acm\SearchCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED'|null $Status
 * @property 'PENDING_AUTO_RENEWAL'|'PENDING_VALIDATION'|'SUCCESS'|'FAILED'|null $RenewalStatus
 * @property 'IMPORTED'|'AMAZON_ISSUED'|'PRIVATE'|null $Type
 * @property bool|null $InUse
 * @property bool|null $Exported
 * @property 'ENABLED'|'DISABLED'|null $ExportOption
 * @property 'CLOUDFRONT'|null $ManagedBy
 * @property 'EMAIL'|'DNS'|'HTTP'|null $ValidationMethod
 */
class AcmCertificateMetadataFilter extends Shape
{
    /**
     * @param array{
     *     Status?: 'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED'|null,
     *     RenewalStatus?: 'PENDING_AUTO_RENEWAL'|'PENDING_VALIDATION'|'SUCCESS'|'FAILED'|null,
     *     Type?: 'IMPORTED'|'AMAZON_ISSUED'|'PRIVATE'|null,
     *     InUse?: bool|null,
     *     Exported?: bool|null,
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
