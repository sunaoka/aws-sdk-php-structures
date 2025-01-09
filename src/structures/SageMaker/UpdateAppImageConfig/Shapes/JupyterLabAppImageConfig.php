<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateAppImageConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FileSystemConfig $FileSystemConfig
 * @property ContainerConfig $ContainerConfig
 */
class JupyterLabAppImageConfig extends Shape
{
    /**
     * @param array{
     *     FileSystemConfig?: FileSystemConfig,
     *     ContainerConfig?: ContainerConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
