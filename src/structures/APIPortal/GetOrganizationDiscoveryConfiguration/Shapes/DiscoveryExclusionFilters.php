<?php

namespace Sunaoka\Aws\Structures\APIPortal\GetOrganizationDiscoveryConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $organizationalUnitIds
 * @property list<string>|null $accountIds
 * @property list<string>|null $resourceArns
 */
class DiscoveryExclusionFilters extends Shape
{
    /**
     * @param array{
     *     organizationalUnitIds?: list<string>|null,
     *     accountIds?: list<string>|null,
     *     resourceArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
