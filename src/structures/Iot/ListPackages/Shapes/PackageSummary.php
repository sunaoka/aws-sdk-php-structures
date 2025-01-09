<?php

namespace Sunaoka\Aws\Structures\Iot\ListPackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $packageName
 * @property string $defaultVersionName
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastModifiedDate
 */
class PackageSummary extends Shape
{
    /**
     * @param array{
     *     packageName?: string,
     *     defaultVersionName?: string,
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     lastModifiedDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
