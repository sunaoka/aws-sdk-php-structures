<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateGroupCertificateAuthority;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AmznClientToken
 * @property string $GroupId
 */
class CreateGroupCertificateAuthorityRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string,
     *     GroupId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
