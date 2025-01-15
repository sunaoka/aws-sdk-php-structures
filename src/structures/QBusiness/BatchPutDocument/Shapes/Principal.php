<?php

namespace Sunaoka\Aws\Structures\QBusiness\BatchPutDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PrincipalUser|null $user
 * @property PrincipalGroup|null $group
 */
class Principal extends Shape
{
    /**
     * @param array{
     *     user?: PrincipalUser|null,
     *     group?: PrincipalGroup|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
