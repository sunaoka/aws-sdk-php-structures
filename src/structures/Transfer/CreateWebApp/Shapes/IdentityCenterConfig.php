<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateWebApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceArn
 * @property string|null $Role
 */
class IdentityCenterConfig extends Shape
{
    /**
     * @param array{
     *     InstanceArn?: string|null,
     *     Role?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
