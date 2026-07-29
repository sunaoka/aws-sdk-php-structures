<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContainerTaskConfiguration|null $containerTaskConfiguration
 */
class TaskConfiguration extends Shape
{
    /**
     * @param array{containerTaskConfiguration?: ContainerTaskConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
