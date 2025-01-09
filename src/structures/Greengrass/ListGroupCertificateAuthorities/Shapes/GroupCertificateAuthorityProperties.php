<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListGroupCertificateAuthorities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupCertificateAuthorityArn
 * @property string $GroupCertificateAuthorityId
 */
class GroupCertificateAuthorityProperties extends Shape
{
    /**
     * @param array{
     *     GroupCertificateAuthorityArn?: string,
     *     GroupCertificateAuthorityId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
