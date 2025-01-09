<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateArn
 */
class DeleteCertificateRequest extends Request
{
    /**
     * @param array{CertificateArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
