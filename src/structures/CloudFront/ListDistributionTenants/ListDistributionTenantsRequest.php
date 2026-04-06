<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionTenants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DistributionTenantAssociationFilter|null $AssociationFilter
 * @property string|null $Marker
 * @property int|null $MaxItems
 */
class ListDistributionTenantsRequest extends Request
{
    /**
     * @param array{
     *     AssociationFilter?: Shapes\DistributionTenantAssociationFilter|null,
     *     Marker?: string|null,
     *     MaxItems?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
