<?php

namespace Sunaoka\Aws\Structures\Batch\CreateComputeEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $imageType
 * @property string|null $imageIdOverride
 * @property string|null $imageKubernetesVersion
 */
class Ec2Configuration extends Shape
{
    /**
     * @param array{
     *     imageType: string,
     *     imageIdOverride?: string|null,
     *     imageKubernetesVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
