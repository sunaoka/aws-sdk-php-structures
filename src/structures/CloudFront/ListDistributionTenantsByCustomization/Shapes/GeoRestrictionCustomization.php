<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionTenantsByCustomization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'blacklist'|'whitelist'|'none' $RestrictionType
 * @property list<string>|null $Locations
 */
class GeoRestrictionCustomization extends Shape
{
    /**
     * @param array{
     *     RestrictionType: 'blacklist'|'whitelist'|'none',
     *     Locations?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
