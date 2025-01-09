<?php

namespace Sunaoka\Aws\Structures\Batch\CreateComputeEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $imageType
 * @property string $imageIdOverride
 * @property string $imageKubernetesVersion
 */
class Ec2Configuration extends Shape
{
    /**
     * @param array{
     *     imageType: string,
     *     imageIdOverride?: string,
     *     imageKubernetesVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
