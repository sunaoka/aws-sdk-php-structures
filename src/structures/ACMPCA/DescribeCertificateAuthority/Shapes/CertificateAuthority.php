<?php

namespace Sunaoka\Aws\Structures\ACMPCA\DescribeCertificateAuthority\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $OwnerAccount
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastStateChangeAt
 * @property 'ROOT'|'SUBORDINATE'|null $Type
 * @property string|null $Serial
 * @property 'CREATING'|'PENDING_CERTIFICATE'|'ACTIVE'|'DELETED'|'DISABLED'|'EXPIRED'|'FAILED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $NotBefore
 * @property \Aws\Api\DateTimeResult|null $NotAfter
 * @property 'REQUEST_TIMED_OUT'|'UNSUPPORTED_ALGORITHM'|'OTHER'|null $FailureReason
 * @property CertificateAuthorityConfiguration|null $CertificateAuthorityConfiguration
 * @property RevocationConfiguration|null $RevocationConfiguration
 * @property \Aws\Api\DateTimeResult|null $RestorableUntil
 * @property 'FIPS_140_2_LEVEL_2_OR_HIGHER'|'FIPS_140_2_LEVEL_3_OR_HIGHER'|'CCPC_LEVEL_1_OR_HIGHER'|null $KeyStorageSecurityStandard
 * @property 'GENERAL_PURPOSE'|'SHORT_LIVED_CERTIFICATE'|null $UsageMode
 */
class CertificateAuthority extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     OwnerAccount?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastStateChangeAt?: \Aws\Api\DateTimeResult|null,
     *     Type?: 'ROOT'|'SUBORDINATE'|null,
     *     Serial?: string|null,
     *     Status?: 'CREATING'|'PENDING_CERTIFICATE'|'ACTIVE'|'DELETED'|'DISABLED'|'EXPIRED'|'FAILED'|null,
     *     NotBefore?: \Aws\Api\DateTimeResult|null,
     *     NotAfter?: \Aws\Api\DateTimeResult|null,
     *     FailureReason?: 'REQUEST_TIMED_OUT'|'UNSUPPORTED_ALGORITHM'|'OTHER'|null,
     *     CertificateAuthorityConfiguration?: CertificateAuthorityConfiguration|null,
     *     RevocationConfiguration?: RevocationConfiguration|null,
     *     RestorableUntil?: \Aws\Api\DateTimeResult|null,
     *     KeyStorageSecurityStandard?: 'FIPS_140_2_LEVEL_2_OR_HIGHER'|'FIPS_140_2_LEVEL_3_OR_HIGHER'|'CCPC_LEVEL_1_OR_HIGHER'|null,
     *     UsageMode?: 'GENERAL_PURPOSE'|'SHORT_LIVED_CERTIFICATE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
