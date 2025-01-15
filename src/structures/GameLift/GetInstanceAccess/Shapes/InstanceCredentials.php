<?php

namespace Sunaoka\Aws\Structures\GameLift\GetInstanceAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserName
 * @property string|null $Secret
 */
class InstanceCredentials extends Shape
{
    /**
     * @param array{
     *     UserName?: string|null,
     *     Secret?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
