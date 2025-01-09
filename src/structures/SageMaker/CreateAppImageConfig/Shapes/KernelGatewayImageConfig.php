<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAppImageConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<KernelSpec> $KernelSpecs
 * @property FileSystemConfig $FileSystemConfig
 */
class KernelGatewayImageConfig extends Shape
{
    /**
     * @param array{
     *     KernelSpecs: list<KernelSpec>,
     *     FileSystemConfig?: FileSystemConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
