<?php

namespace Sunaoka\Aws\Structures\Synthetics\DescribeRuntimeVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VersionName
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $ReleaseDate
 * @property \Aws\Api\DateTimeResult|null $DeprecationDate
 */
class RuntimeVersion extends Shape
{
    /**
     * @param array{
     *     VersionName?: string|null,
     *     Description?: string|null,
     *     ReleaseDate?: \Aws\Api\DateTimeResult|null,
     *     DeprecationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
