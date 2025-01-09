<?php

namespace Sunaoka\Aws\Structures\Panorama\ListPackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $PackageId
 * @property string $PackageName
 * @property array<string, string> $Tags
 */
class PackageListItem extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     PackageId?: string,
     *     PackageName?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
