<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetSoftwareV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PackageName
 * @property string|null $PackageVersion
 * @property string $PackageType
 * @property int $ResourceCount
 */
class SoftwareResult extends Shape
{
    /**
     * @param array{
     *     PackageName: string,
     *     PackageVersion?: string|null,
     *     PackageType: string,
     *     ResourceCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
