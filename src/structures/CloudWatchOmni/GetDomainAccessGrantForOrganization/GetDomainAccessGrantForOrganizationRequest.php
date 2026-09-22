<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetDomainAccessGrantForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $grantId
 */
class GetDomainAccessGrantForOrganizationRequest extends Request
{
    /**
     * @param array{grantId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
