<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AlarmArn
 * @property string $AlarmRoleArn
 */
class Monitor extends Shape
{
    /**
     * @param array{
     *     AlarmArn: string,
     *     AlarmRoleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
