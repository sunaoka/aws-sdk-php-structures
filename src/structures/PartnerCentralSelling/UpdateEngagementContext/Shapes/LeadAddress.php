<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\UpdateEngagementContext\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $City
 * @property string|null $PostalCode
 * @property string|null $StateOrRegion
 * @property string|null $CountryCode
 */
class LeadAddress extends Shape
{
    /**
     * @param array{
     *     City?: string|null,
     *     PostalCode?: string|null,
     *     StateOrRegion?: string|null,
     *     CountryCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
