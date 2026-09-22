<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\DeleteDomainAccessGrantForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $grantId
 */
class DeleteDomainAccessGrantForOrganizationRequest extends Request
{
    /**
     * @param array{grantId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
