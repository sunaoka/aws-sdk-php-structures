<?php

namespace Sunaoka\Aws\Structures\Transfer\DeleteCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateId
 */
class DeleteCertificateRequest extends Request
{
    /**
     * @param array{CertificateId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
