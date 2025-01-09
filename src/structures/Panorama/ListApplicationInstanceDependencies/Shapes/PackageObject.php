<?php

namespace Sunaoka\Aws\Structures\Panorama\ListApplicationInstanceDependencies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $PackageVersion
 * @property string $PatchVersion
 */
class PackageObject extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     PackageVersion: string,
     *     PatchVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
