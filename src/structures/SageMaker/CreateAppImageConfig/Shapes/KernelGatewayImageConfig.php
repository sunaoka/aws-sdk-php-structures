<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAppImageConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<KernelSpec> $KernelSpecs
 * @property FileSystemConfig|null $FileSystemConfig
 */
class KernelGatewayImageConfig extends Shape
{
    /**
     * @param array{
     *     KernelSpecs: list<KernelSpec>,
     *     FileSystemConfig?: FileSystemConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
