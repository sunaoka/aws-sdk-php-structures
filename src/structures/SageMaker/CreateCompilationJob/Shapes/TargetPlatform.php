<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateCompilationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ANDROID'|'LINUX' $Os
 * @property 'X86_64'|'X86'|'ARM64'|'ARM_EABI'|'ARM_EABIHF' $Arch
 * @property 'INTEL_GRAPHICS'|'MALI'|'NVIDIA'|'NNA' $Accelerator
 */
class TargetPlatform extends Shape
{
    /**
     * @param array{
     *     Os: 'ANDROID'|'LINUX',
     *     Arch: 'X86_64'|'X86'|'ARM64'|'ARM_EABI'|'ARM_EABIHF',
     *     Accelerator?: 'INTEL_GRAPHICS'|'MALI'|'NVIDIA'|'NNA'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
