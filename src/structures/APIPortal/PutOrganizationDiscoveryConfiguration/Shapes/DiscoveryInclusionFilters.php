<?php

namespace Sunaoka\Aws\Structures\APIPortal\PutOrganizationDiscoveryConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $organizationalUnitIds
 * @property list<string>|null $accountIds
 */
class DiscoveryInclusionFilters extends Shape
{
    /**
     * @param array{
     *     organizationalUnitIds?: list<string>|null,
     *     accountIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
