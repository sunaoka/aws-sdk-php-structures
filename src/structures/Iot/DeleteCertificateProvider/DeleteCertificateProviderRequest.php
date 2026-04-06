<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteCertificateProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificateProviderName
 */
class DeleteCertificateProviderRequest extends Request
{
    /**
     * @param array{certificateProviderName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
