<?php

namespace Sunaoka\Aws\Structures\FMS\PutAdminAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $OrganizationalUnits
 * @property bool|null $AllOrganizationalUnitsEnabled
 * @property bool|null $ExcludeSpecifiedOrganizationalUnits
 */
class OrganizationalUnitScope extends Shape
{
    /**
     * @param array{
     *     OrganizationalUnits?: list<string>|null,
     *     AllOrganizationalUnitsEnabled?: bool|null,
     *     ExcludeSpecifiedOrganizationalUnits?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
