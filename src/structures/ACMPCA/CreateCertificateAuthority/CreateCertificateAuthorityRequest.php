<?php

namespace Sunaoka\Aws\Structures\ACMPCA\CreateCertificateAuthority;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CertificateAuthorityConfiguration $CertificateAuthorityConfiguration
 * @property Shapes\RevocationConfiguration $RevocationConfiguration
 * @property 'ROOT'|'SUBORDINATE' $CertificateAuthorityType
 * @property string $IdempotencyToken
 * @property 'FIPS_140_2_LEVEL_2_OR_HIGHER'|'FIPS_140_2_LEVEL_3_OR_HIGHER'|'CCPC_LEVEL_1_OR_HIGHER' $KeyStorageSecurityStandard
 * @property list<Shapes\Tag> $Tags
 * @property 'GENERAL_PURPOSE'|'SHORT_LIVED_CERTIFICATE' $UsageMode
 */
class CreateCertificateAuthorityRequest extends Request
{
    /**
     * @param array{
     *     CertificateAuthorityConfiguration: Shapes\CertificateAuthorityConfiguration,
     *     RevocationConfiguration?: Shapes\RevocationConfiguration,
     *     CertificateAuthorityType: 'ROOT'|'SUBORDINATE',
     *     IdempotencyToken?: string,
     *     KeyStorageSecurityStandard?: 'FIPS_140_2_LEVEL_2_OR_HIGHER'|'FIPS_140_2_LEVEL_3_OR_HIGHER'|'CCPC_LEVEL_1_OR_HIGHER',
     *     Tags?: list<Shapes\Tag>,
     *     UsageMode?: 'GENERAL_PURPOSE'|'SHORT_LIVED_CERTIFICATE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
