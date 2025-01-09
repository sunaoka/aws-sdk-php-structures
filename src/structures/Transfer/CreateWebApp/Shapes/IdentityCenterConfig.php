<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateWebApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceArn
 * @property string $Role
 */
class IdentityCenterConfig extends Shape
{
    /**
     * @param array{
     *     InstanceArn?: string,
     *     Role?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
