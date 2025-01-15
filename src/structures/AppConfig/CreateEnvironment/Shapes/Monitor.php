<?php

namespace Sunaoka\Aws\Structures\AppConfig\CreateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AlarmArn
 * @property string|null $AlarmRoleArn
 */
class Monitor extends Shape
{
    /**
     * @param array{
     *     AlarmArn: string,
     *     AlarmRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
