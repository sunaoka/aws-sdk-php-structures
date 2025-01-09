<?php

namespace Sunaoka\Aws\Structures\DataZone\ListPolicyGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $groupIdentifier
 */
class GroupPolicyGrantPrincipal extends Shape
{
    /**
     * @param array{groupIdentifier?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
