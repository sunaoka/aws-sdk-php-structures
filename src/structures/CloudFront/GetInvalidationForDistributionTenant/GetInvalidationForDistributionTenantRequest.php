<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetInvalidationForDistributionTenant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DistributionTenantId
 * @property string $Id
 */
class GetInvalidationForDistributionTenantRequest extends Request
{
    /**
     * @param array{
     *     DistributionTenantId: string,
     *     Id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
