<?php

namespace Sunaoka\Aws\Structures\drs\StartSourceNetworkRecovery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SSM_STORE'|'DYNAMIC' $type
 * @property string $value
 */
class LaunchActionParameter extends Shape
{
    /**
     * @param array{
     *     type?: 'SSM_STORE'|'DYNAMIC',
     *     value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
