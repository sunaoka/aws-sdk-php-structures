<?php

namespace Sunaoka\Aws\Structures\Iot\ListPackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $packageName
 * @property string|null $defaultVersionName
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property \Aws\Api\DateTimeResult|null $lastModifiedDate
 */
class PackageSummary extends Shape
{
    /**
     * @param array{
     *     packageName?: string|null,
     *     defaultVersionName?: string|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     lastModifiedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
