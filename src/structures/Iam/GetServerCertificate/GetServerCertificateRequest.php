<?php

namespace Sunaoka\Aws\Structures\Iam\GetServerCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerCertificateName
 */
class GetServerCertificateRequest extends Request
{
    /**
     * @param array{ServerCertificateName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
