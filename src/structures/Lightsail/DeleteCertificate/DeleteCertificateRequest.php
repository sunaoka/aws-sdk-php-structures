<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificateName
 */
class DeleteCertificateRequest extends Request
{
    /**
     * @param array{certificateName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
