<?php

namespace Sunaoka\Aws\Structures\ACMPCA\TagCertificateAuthority;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateAuthorityArn
 * @property list<Shapes\Tag> $Tags
 */
class TagCertificateAuthorityRequest extends Request
{
    /**
     * @param array{
     *     CertificateAuthorityArn: string,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
