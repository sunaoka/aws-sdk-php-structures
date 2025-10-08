<?php

namespace Sunaoka\Aws\Structures\SecurityIR\GetMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $coverEntireOrganization
 * @property list<string>|null $organizationalUnits
 */
class MembershipAccountsConfigurations extends Shape
{
    /**
     * @param array{
     *     coverEntireOrganization?: bool|null,
     *     organizationalUnits?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
