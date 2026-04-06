<?php

namespace Sunaoka\Aws\Structures\Ssm\ListNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $OrganizationalUnitId
 * @property string|null $OrganizationalUnitPath
 */
class NodeOwnerInfo extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     OrganizationalUnitId?: string|null,
     *     OrganizationalUnitPath?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
