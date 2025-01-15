<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED'|null $Status
 * @property string|null $CertificateAuthorityArn
 */
class CertificateBasedAuthProperties extends Shape
{
    /**
     * @param array{
     *     Status?: 'DISABLED'|'ENABLED'|null,
     *     CertificateAuthorityArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
