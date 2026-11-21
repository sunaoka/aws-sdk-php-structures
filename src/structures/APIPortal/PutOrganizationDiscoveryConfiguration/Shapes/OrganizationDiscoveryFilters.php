<?php

namespace Sunaoka\Aws\Structures\APIPortal\PutOrganizationDiscoveryConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DiscoveryExclusionFilters|null $exclusionFilters
 * @property DiscoveryInclusionFilters|null $inclusionFilters
 */
class OrganizationDiscoveryFilters extends Shape
{
    /**
     * @param array{
     *     exclusionFilters?: DiscoveryExclusionFilters|null,
     *     inclusionFilters?: DiscoveryInclusionFilters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
