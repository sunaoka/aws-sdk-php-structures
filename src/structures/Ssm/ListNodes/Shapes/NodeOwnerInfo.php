<?php

namespace Sunaoka\Aws\Structures\Ssm\ListNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $OrganizationalUnitId
 * @property string $OrganizationalUnitPath
 */
class NodeOwnerInfo extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     OrganizationalUnitId?: string,
     *     OrganizationalUnitPath?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
