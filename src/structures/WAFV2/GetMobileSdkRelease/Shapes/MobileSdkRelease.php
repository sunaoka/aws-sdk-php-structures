<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetMobileSdkRelease\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReleaseVersion
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property string $ReleaseNotes
 * @property list<Tag> $Tags
 */
class MobileSdkRelease extends Shape
{
    /**
     * @param array{
     *     ReleaseVersion?: string,
     *     Timestamp?: \Aws\Api\DateTimeResult,
     *     ReleaseNotes?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
