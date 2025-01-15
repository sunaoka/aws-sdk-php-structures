<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListMobileSdkReleases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReleaseVersion
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 */
class ReleaseSummary extends Shape
{
    /**
     * @param array{
     *     ReleaseVersion?: string|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
