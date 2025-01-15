<?php

namespace Sunaoka\Aws\Structures\ACMPCA\DeleteCertificateAuthority;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateAuthorityArn
 * @property int<7, 30>|null $PermanentDeletionTimeInDays
 */
class DeleteCertificateAuthorityRequest extends Request
{
    /**
     * @param array{
     *     CertificateAuthorityArn: string,
     *     PermanentDeletionTimeInDays?: int<7, 30>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
