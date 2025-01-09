<?php

namespace Sunaoka\Aws\Structures\DataZone\ListPolicyGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $includeChildDomainUnits
 * @property list<string> $projectProfiles
 */
class CreateProjectFromProjectProfilePolicyGrantDetail extends Shape
{
    /**
     * @param array{
     *     includeChildDomainUnits?: bool,
     *     projectProfiles?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
