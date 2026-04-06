<?php

namespace Sunaoka\Aws\Structures\DataZone\RemovePolicyGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $groupIdentifier
 */
class GroupPolicyGrantPrincipal extends Shape
{
    /**
     * @param array{groupIdentifier?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
