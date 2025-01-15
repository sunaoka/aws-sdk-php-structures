<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeDirectoryConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED'|'ENABLED_NO_DIRECTORY_LOGIN_FALLBACK'|null $Status
 * @property string|null $CertificateAuthorityArn
 */
class CertificateBasedAuthProperties extends Shape
{
    /**
     * @param array{
     *     Status?: 'DISABLED'|'ENABLED'|'ENABLED_NO_DIRECTORY_LOGIN_FALLBACK'|null,
     *     CertificateAuthorityArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
