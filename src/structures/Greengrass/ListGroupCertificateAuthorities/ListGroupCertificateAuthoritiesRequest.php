<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListGroupCertificateAuthorities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupId
 */
class ListGroupCertificateAuthoritiesRequest extends Request
{
    /**
     * @param array{GroupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
