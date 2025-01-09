<?php

namespace Sunaoka\Aws\Structures\QBusiness\BatchPutDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PrincipalUser $user
 * @property PrincipalGroup $group
 */
class Principal extends Shape
{
    /**
     * @param array{
     *     user?: PrincipalUser,
     *     group?: PrincipalGroup
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
