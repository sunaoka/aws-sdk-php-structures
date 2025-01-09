<?php

namespace Sunaoka\Aws\Structures\FMS\PutAdminAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $OrganizationalUnits
 * @property bool $AllOrganizationalUnitsEnabled
 * @property bool $ExcludeSpecifiedOrganizationalUnits
 */
class OrganizationalUnitScope extends Shape
{
    /**
     * @param array{
     *     OrganizationalUnits?: list<string>,
     *     AllOrganizationalUnitsEnabled?: bool,
     *     ExcludeSpecifiedOrganizationalUnits?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
