<?php

namespace Sunaoka\Aws\Structures\ACMPCA\DeleteCertificateAuthority;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateAuthorityArn
 * @property int $PermanentDeletionTimeInDays
 */
class DeleteCertificateAuthorityRequest extends Request
{
    /**
     * @param array{
     *     CertificateAuthorityArn: string,
     *     PermanentDeletionTimeInDays?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
