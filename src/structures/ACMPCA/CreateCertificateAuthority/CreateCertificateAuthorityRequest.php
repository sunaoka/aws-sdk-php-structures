<?php

namespace Sunaoka\Aws\Structures\ACMPCA\CreateCertificateAuthority;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CertificateAuthorityConfiguration $CertificateAuthorityConfiguration
 * @property Shapes\RevocationConfiguration|null $RevocationConfiguration
 * @property 'ROOT'|'SUBORDINATE' $CertificateAuthorityType
 * @property string|null $IdempotencyToken
 * @property 'FIPS_140_2_LEVEL_2_OR_HIGHER'|'FIPS_140_2_LEVEL_3_OR_HIGHER'|'CCPC_LEVEL_1_OR_HIGHER'|null $KeyStorageSecurityStandard
 * @property list<Shapes\Tag>|null $Tags
 * @property 'GENERAL_PURPOSE'|'SHORT_LIVED_CERTIFICATE'|null $UsageMode
 */
class CreateCertificateAuthorityRequest extends Request
{
    /**
     * @param array{
     *     CertificateAuthorityConfiguration: Shapes\CertificateAuthorityConfiguration,
     *     RevocationConfiguration?: Shapes\RevocationConfiguration|null,
     *     CertificateAuthorityType: 'ROOT'|'SUBORDINATE',
     *     IdempotencyToken?: string|null,
     *     KeyStorageSecurityStandard?: 'FIPS_140_2_LEVEL_2_OR_HIGHER'|'FIPS_140_2_LEVEL_3_OR_HIGHER'|'CCPC_LEVEL_1_OR_HIGHER'|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     UsageMode?: 'GENERAL_PURPOSE'|'SHORT_LIVED_CERTIFICATE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
