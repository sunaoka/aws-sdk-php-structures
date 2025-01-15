<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateServerCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerCertificateName
 * @property string|null $NewPath
 * @property string|null $NewServerCertificateName
 */
class UpdateServerCertificateRequest extends Request
{
    /**
     * @param array{
     *     ServerCertificateName: string,
     *     NewPath?: string|null,
     *     NewServerCertificateName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
