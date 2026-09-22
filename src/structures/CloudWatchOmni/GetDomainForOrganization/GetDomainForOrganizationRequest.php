<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetDomainForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 */
class GetDomainForOrganizationRequest extends Request
{
    /**
     * @param array{domainId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
