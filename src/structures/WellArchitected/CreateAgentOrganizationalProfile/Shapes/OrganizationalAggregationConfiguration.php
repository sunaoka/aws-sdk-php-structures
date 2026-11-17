<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateAgentOrganizationalProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<OrganizationalUnitEntry>|null $organizationalUnits
 * @property list<OrganizationalAccountEntry>|null $accounts
 */
class OrganizationalAggregationConfiguration extends Shape
{
    /**
     * @param array{
     *     organizationalUnits?: list<OrganizationalUnitEntry>|null,
     *     accounts?: list<OrganizationalAccountEntry>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
