<?php

namespace Sunaoka\Aws\Structures\EKS\ListEksAnywhereSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $token
 */
class License extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     token?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
