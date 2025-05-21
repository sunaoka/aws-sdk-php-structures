<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetDistributionTenant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetDistributionTenantRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
