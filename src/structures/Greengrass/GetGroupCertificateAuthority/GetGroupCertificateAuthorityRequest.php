<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetGroupCertificateAuthority;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateAuthorityId
 * @property string $GroupId
 */
class GetGroupCertificateAuthorityRequest extends Request
{
    /**
     * @param array{
     *     CertificateAuthorityId: string,
     *     GroupId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
