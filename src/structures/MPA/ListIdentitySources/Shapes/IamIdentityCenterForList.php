<?php

namespace Sunaoka\Aws\Structures\MPA\ListIdentitySources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceArn
 * @property string|null $ApprovalPortalUrl
 * @property string|null $Region
 */
class IamIdentityCenterForList extends Shape
{
    /**
     * @param array{
     *     InstanceArn?: string|null,
     *     ApprovalPortalUrl?: string|null,
     *     Region?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
