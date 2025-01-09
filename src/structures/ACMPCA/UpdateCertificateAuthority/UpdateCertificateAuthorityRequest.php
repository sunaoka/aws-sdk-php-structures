<?php

namespace Sunaoka\Aws\Structures\ACMPCA\UpdateCertificateAuthority;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateAuthorityArn
 * @property Shapes\RevocationConfiguration $RevocationConfiguration
 * @property 'CREATING'|'PENDING_CERTIFICATE'|'ACTIVE'|'DELETED'|'DISABLED'|'EXPIRED'|'FAILED' $Status
 */
class UpdateCertificateAuthorityRequest extends Request
{
    /**
     * @param array{
     *     CertificateAuthorityArn: string,
     *     RevocationConfiguration?: Shapes\RevocationConfiguration,
     *     Status?: 'CREATING'|'PENDING_CERTIFICATE'|'ACTIVE'|'DELETED'|'DISABLED'|'EXPIRED'|'FAILED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
