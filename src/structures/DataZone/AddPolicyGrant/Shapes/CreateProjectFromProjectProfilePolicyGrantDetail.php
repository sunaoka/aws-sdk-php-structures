<?php

namespace Sunaoka\Aws\Structures\DataZone\AddPolicyGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $includeChildDomainUnits
 * @property list<string>|null $projectProfiles
 */
class CreateProjectFromProjectProfilePolicyGrantDetail extends Shape
{
    /**
     * @param array{
     *     includeChildDomainUnits?: bool|null,
     *     projectProfiles?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
