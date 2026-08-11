<?php

namespace Sunaoka\Aws\Structures\AccountAccess\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceArn
 */
class IdentityCenter extends Shape
{
    /**
     * @param array{instanceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
