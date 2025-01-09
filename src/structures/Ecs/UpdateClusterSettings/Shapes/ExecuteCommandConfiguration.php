<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateClusterSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kmsKeyId
 * @property 'NONE'|'DEFAULT'|'OVERRIDE' $logging
 * @property ExecuteCommandLogConfiguration $logConfiguration
 */
class ExecuteCommandConfiguration extends Shape
{
    /**
     * @param array{
     *     kmsKeyId?: string,
     *     logging?: 'NONE'|'DEFAULT'|'OVERRIDE',
     *     logConfiguration?: ExecuteCommandLogConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
