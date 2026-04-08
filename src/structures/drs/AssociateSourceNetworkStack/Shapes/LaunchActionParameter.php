<?php

namespace Sunaoka\Aws\Structures\drs\AssociateSourceNetworkStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $value
 * @property 'SSM_STORE'|'DYNAMIC'|null $type
 */
class LaunchActionParameter extends Shape
{
    /**
     * @param array{
     *     value?: string|null,
     *     type?: 'SSM_STORE'|'DYNAMIC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
