<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteServerCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerCertificateName
 */
class DeleteServerCertificateRequest extends Request
{
    /**
     * @param array{ServerCertificateName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
