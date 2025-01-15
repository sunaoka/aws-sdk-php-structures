<?php

namespace Sunaoka\Aws\Structures\ACMPCA\UpdateCertificateAuthority;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateAuthorityArn
 * @property Shapes\RevocationConfiguration|null $RevocationConfiguration
 * @property 'CREATING'|'PENDING_CERTIFICATE'|'ACTIVE'|'DELETED'|'DISABLED'|'EXPIRED'|'FAILED'|null $Status
 */
class UpdateCertificateAuthorityRequest extends Request
{
    /**
     * @param array{
     *     CertificateAuthorityArn: string,
     *     RevocationConfiguration?: Shapes\RevocationConfiguration|null,
     *     Status?: 'CREATING'|'PENDING_CERTIFICATE'|'ACTIVE'|'DELETED'|'DISABLED'|'EXPIRED'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
