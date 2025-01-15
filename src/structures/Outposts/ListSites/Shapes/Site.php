<?php

namespace Sunaoka\Aws\Structures\Outposts\ListSites\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SiteId
 * @property string|null $AccountId
 * @property string|null $Name
 * @property string|null $Description
 * @property array<string, string>|null $Tags
 * @property string|null $SiteArn
 * @property string|null $Notes
 * @property string|null $OperatingAddressCountryCode
 * @property string|null $OperatingAddressStateOrRegion
 * @property string|null $OperatingAddressCity
 * @property RackPhysicalProperties|null $RackPhysicalProperties
 */
class Site extends Shape
{
    /**
     * @param array{
     *     SiteId?: string|null,
     *     AccountId?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Tags?: array<string, string>|null,
     *     SiteArn?: string|null,
     *     Notes?: string|null,
     *     OperatingAddressCountryCode?: string|null,
     *     OperatingAddressStateOrRegion?: string|null,
     *     OperatingAddressCity?: string|null,
     *     RackPhysicalProperties?: RackPhysicalProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
