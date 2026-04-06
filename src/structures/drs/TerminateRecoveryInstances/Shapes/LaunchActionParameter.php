<?php

namespace Sunaoka\Aws\Structures\drs\TerminateRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SSM_STORE'|'DYNAMIC'|null $type
 * @property string|null $value
 */
class LaunchActionParameter extends Shape
{
    /**
     * @param array{
     *     type?: 'SSM_STORE'|'DYNAMIC'|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
