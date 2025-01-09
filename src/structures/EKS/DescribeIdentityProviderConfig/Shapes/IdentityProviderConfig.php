<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeIdentityProviderConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $type
 * @property string $name
 */
class IdentityProviderConfig extends Shape
{
    /**
     * @param array{
     *     type: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
