<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateNotebook\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $imageVersion
 * @property PackageConfig|null $packageConfig
 */
class EnvironmentConfig extends Shape
{
    /**
     * @param array{
     *     imageVersion?: string|null,
     *     packageConfig?: PackageConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
