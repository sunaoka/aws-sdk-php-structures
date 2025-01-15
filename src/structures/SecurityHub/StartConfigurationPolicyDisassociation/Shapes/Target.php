<?php

namespace Sunaoka\Aws\Structures\SecurityHub\StartConfigurationPolicyDisassociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $OrganizationalUnitId
 * @property string|null $RootId
 */
class Target extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     OrganizationalUnitId?: string|null,
     *     RootId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
