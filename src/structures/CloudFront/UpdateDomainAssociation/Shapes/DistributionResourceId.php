<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDomainAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DistributionId
 * @property string|null $DistributionTenantId
 */
class DistributionResourceId extends Shape
{
    /**
     * @param array{
     *     DistributionId?: string|null,
     *     DistributionTenantId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
