<?php

namespace Sunaoka\Aws\Structures\DataZone\ListPolicyGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $domainUnitId
 */
class CreateEnvironmentProfilePolicyGrantDetail extends Shape
{
    /**
     * @param array{domainUnitId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
