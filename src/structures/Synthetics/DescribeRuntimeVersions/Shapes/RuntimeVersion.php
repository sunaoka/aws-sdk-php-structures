<?php

namespace Sunaoka\Aws\Structures\Synthetics\DescribeRuntimeVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VersionName
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $ReleaseDate
 * @property \Aws\Api\DateTimeResult $DeprecationDate
 */
class RuntimeVersion extends Shape
{
    /**
     * @param array{
     *     VersionName?: string,
     *     Description?: string,
     *     ReleaseDate?: \Aws\Api\DateTimeResult,
     *     DeprecationDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
