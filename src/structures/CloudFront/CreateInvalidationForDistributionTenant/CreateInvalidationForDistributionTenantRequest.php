<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateInvalidationForDistributionTenant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property Shapes\InvalidationBatch $InvalidationBatch
 */
class CreateInvalidationForDistributionTenantRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     InvalidationBatch: Shapes\InvalidationBatch
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
