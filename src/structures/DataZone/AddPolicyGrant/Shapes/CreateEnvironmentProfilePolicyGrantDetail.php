<?php

namespace Sunaoka\Aws\Structures\DataZone\AddPolicyGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainUnitId
 */
class CreateEnvironmentProfilePolicyGrantDetail extends Shape
{
    /**
     * @param array{domainUnitId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
