<?php

namespace Sunaoka\Aws\Structures\SecurityHub\StartConfigurationPolicyDisassociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $OrganizationalUnitId
 * @property string $RootId
 */
class Target extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     OrganizationalUnitId?: string,
     *     RootId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
