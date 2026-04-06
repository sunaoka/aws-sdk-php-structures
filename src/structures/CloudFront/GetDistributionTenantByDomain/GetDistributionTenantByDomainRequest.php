<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetDistributionTenantByDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Domain
 */
class GetDistributionTenantByDomainRequest extends Request
{
    /**
     * @param array{Domain: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
