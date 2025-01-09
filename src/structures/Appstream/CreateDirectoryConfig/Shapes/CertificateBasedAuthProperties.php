<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateDirectoryConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED'|'ENABLED_NO_DIRECTORY_LOGIN_FALLBACK' $Status
 * @property string $CertificateAuthorityArn
 */
class CertificateBasedAuthProperties extends Shape
{
    /**
     * @param array{
     *     Status?: 'DISABLED'|'ENABLED'|'ENABLED_NO_DIRECTORY_LOGIN_FALLBACK',
     *     CertificateAuthorityArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
