<?php

namespace Sunaoka\Aws\Structures\Panorama\ListPackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $PackageId
 * @property string|null $PackageName
 * @property array<string, string>|null $Tags
 */
class PackageListItem extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     PackageId?: string|null,
     *     PackageName?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
