<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeModelPackagingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LINUX' $Os
 * @property 'ARM64'|'X86_64' $Arch
 * @property 'NVIDIA' $Accelerator
 */
class TargetPlatform extends Shape
{
    /**
     * @param array{
     *     Os: 'LINUX',
     *     Arch: 'ARM64'|'X86_64',
     *     Accelerator?: 'NVIDIA'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
