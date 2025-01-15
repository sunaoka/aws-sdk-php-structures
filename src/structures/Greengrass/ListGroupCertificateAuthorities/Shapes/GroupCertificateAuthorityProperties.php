<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListGroupCertificateAuthorities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GroupCertificateAuthorityArn
 * @property string|null $GroupCertificateAuthorityId
 */
class GroupCertificateAuthorityProperties extends Shape
{
    /**
     * @param array{
     *     GroupCertificateAuthorityArn?: string|null,
     *     GroupCertificateAuthorityId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
