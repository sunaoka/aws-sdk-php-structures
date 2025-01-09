<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteHsmClientCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HsmClientCertificateIdentifier
 */
class DeleteHsmClientCertificateRequest extends Request
{
    /**
     * @param array{HsmClientCertificateIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
