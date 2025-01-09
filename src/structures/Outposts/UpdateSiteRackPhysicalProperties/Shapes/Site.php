<?php

namespace Sunaoka\Aws\Structures\Outposts\UpdateSiteRackPhysicalProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SiteId
 * @property string $AccountId
 * @property string $Name
 * @property string $Description
 * @property array<string, string> $Tags
 * @property string $SiteArn
 * @property string $Notes
 * @property string $OperatingAddressCountryCode
 * @property string $OperatingAddressStateOrRegion
 * @property string $OperatingAddressCity
 * @property RackPhysicalProperties $RackPhysicalProperties
 */
class Site extends Shape
{
    /**
     * @param array{
     *     SiteId?: string,
     *     AccountId?: string,
     *     Name?: string,
     *     Description?: string,
     *     Tags?: array<string, string>,
     *     SiteArn?: string,
     *     Notes?: string,
     *     OperatingAddressCountryCode?: string,
     *     OperatingAddressStateOrRegion?: string,
     *     OperatingAddressCity?: string,
     *     RackPhysicalProperties?: RackPhysicalProperties
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
