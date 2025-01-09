<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\PutResourcePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policy
 * @property string $resourceArn
 */
class ResourcePolicy extends Shape
{
    /**
     * @param array{
     *     policy?: string,
     *     resourceArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
