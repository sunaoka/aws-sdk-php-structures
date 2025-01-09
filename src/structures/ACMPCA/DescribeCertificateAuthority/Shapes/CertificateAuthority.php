<?php

namespace Sunaoka\Aws\Structures\ACMPCA\DescribeCertificateAuthority\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $OwnerAccount
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastStateChangeAt
 * @property 'ROOT'|'SUBORDINATE' $Type
 * @property string $Serial
 * @property 'CREATING'|'PENDING_CERTIFICATE'|'ACTIVE'|'DELETED'|'DISABLED'|'EXPIRED'|'FAILED' $Status
 * @property \Aws\Api\DateTimeResult $NotBefore
 * @property \Aws\Api\DateTimeResult $NotAfter
 * @property 'REQUEST_TIMED_OUT'|'UNSUPPORTED_ALGORITHM'|'OTHER' $FailureReason
 * @property CertificateAuthorityConfiguration $CertificateAuthorityConfiguration
 * @property RevocationConfiguration $RevocationConfiguration
 * @property \Aws\Api\DateTimeResult $RestorableUntil
 * @property 'FIPS_140_2_LEVEL_2_OR_HIGHER'|'FIPS_140_2_LEVEL_3_OR_HIGHER'|'CCPC_LEVEL_1_OR_HIGHER' $KeyStorageSecurityStandard
 * @property 'GENERAL_PURPOSE'|'SHORT_LIVED_CERTIFICATE' $UsageMode
 */
class CertificateAuthority extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     OwnerAccount?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     LastStateChangeAt?: \Aws\Api\DateTimeResult,
     *     Type?: 'ROOT'|'SUBORDINATE',
     *     Serial?: string,
     *     Status?: 'CREATING'|'PENDING_CERTIFICATE'|'ACTIVE'|'DELETED'|'DISABLED'|'EXPIRED'|'FAILED',
     *     NotBefore?: \Aws\Api\DateTimeResult,
     *     NotAfter?: \Aws\Api\DateTimeResult,
     *     FailureReason?: 'REQUEST_TIMED_OUT'|'UNSUPPORTED_ALGORITHM'|'OTHER',
     *     CertificateAuthorityConfiguration?: CertificateAuthorityConfiguration,
     *     RevocationConfiguration?: RevocationConfiguration,
     *     RestorableUntil?: \Aws\Api\DateTimeResult,
     *     KeyStorageSecurityStandard?: 'FIPS_140_2_LEVEL_2_OR_HIGHER'|'FIPS_140_2_LEVEL_3_OR_HIGHER'|'CCPC_LEVEL_1_OR_HIGHER',
     *     UsageMode?: 'GENERAL_PURPOSE'|'SHORT_LIVED_CERTIFICATE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
