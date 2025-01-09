<?php

namespace Sunaoka\Aws\Structures\GameLift\GetInstanceAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserName
 * @property string $Secret
 */
class InstanceCredentials extends Shape
{
    /**
     * @param array{
     *     UserName?: string,
     *     Secret?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
