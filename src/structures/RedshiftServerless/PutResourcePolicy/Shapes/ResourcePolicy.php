<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\PutResourcePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $policy
 * @property string|null $resourceArn
 */
class ResourcePolicy extends Shape
{
    /**
     * @param array{
     *     policy?: string|null,
     *     resourceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
