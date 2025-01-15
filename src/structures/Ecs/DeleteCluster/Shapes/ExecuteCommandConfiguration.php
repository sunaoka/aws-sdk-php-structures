<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $kmsKeyId
 * @property 'NONE'|'DEFAULT'|'OVERRIDE'|null $logging
 * @property ExecuteCommandLogConfiguration|null $logConfiguration
 */
class ExecuteCommandConfiguration extends Shape
{
    /**
     * @param array{
     *     kmsKeyId?: string|null,
     *     logging?: 'NONE'|'DEFAULT'|'OVERRIDE'|null,
     *     logConfiguration?: ExecuteCommandLogConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
