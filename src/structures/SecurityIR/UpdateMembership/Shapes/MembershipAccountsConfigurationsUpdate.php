<?php

namespace Sunaoka\Aws\Structures\SecurityIR\UpdateMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $coverEntireOrganization
 * @property list<string>|null $organizationalUnitsToAdd
 * @property list<string>|null $organizationalUnitsToRemove
 */
class MembershipAccountsConfigurationsUpdate extends Shape
{
    /**
     * @param array{
     *     coverEntireOrganization?: bool|null,
     *     organizationalUnitsToAdd?: list<string>|null,
     *     organizationalUnitsToRemove?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
