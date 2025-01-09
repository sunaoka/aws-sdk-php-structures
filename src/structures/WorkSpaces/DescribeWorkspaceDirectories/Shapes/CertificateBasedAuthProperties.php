<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED' $Status
 * @property string $CertificateAuthorityArn
 */
class CertificateBasedAuthProperties extends Shape
{
    /**
     * @param array{
     *     Status?: 'DISABLED'|'ENABLED',
     *     CertificateAuthorityArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
