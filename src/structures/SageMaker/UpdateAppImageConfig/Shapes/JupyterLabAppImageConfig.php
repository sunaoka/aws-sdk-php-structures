<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateAppImageConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FileSystemConfig|null $FileSystemConfig
 * @property ContainerConfig|null $ContainerConfig
 */
class JupyterLabAppImageConfig extends Shape
{
    /**
     * @param array{
     *     FileSystemConfig?: FileSystemConfig|null,
     *     ContainerConfig?: ContainerConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
