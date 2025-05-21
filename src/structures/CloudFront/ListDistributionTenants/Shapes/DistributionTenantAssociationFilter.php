<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionTenants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DistributionId
 * @property string|null $ConnectionGroupId
 */
class DistributionTenantAssociationFilter extends Shape
{
    /**
     * @param array{
     *     DistributionId?: string|null,
     *     ConnectionGroupId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
