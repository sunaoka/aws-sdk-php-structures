<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\DeleteDomainForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 */
class DeleteDomainForOrganizationRequest extends Request
{
    /**
     * @param array{domainId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
