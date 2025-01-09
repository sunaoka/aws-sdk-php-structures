<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListMobileSdkReleases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReleaseVersion
 * @property \Aws\Api\DateTimeResult $Timestamp
 */
class ReleaseSummary extends Shape
{
    /**
     * @param array{
     *     ReleaseVersion?: string,
     *     Timestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
