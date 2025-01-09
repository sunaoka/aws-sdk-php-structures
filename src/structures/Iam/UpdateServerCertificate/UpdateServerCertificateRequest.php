<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateServerCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerCertificateName
 * @property string $NewPath
 * @property string $NewServerCertificateName
 */
class UpdateServerCertificateRequest extends Request
{
    /**
     * @param array{
     *     ServerCertificateName: string,
     *     NewPath?: string,
     *     NewServerCertificateName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
