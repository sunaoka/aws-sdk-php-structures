<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetMobileSdkRelease\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReleaseVersion
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 * @property string|null $ReleaseNotes
 * @property list<Tag>|null $Tags
 */
class MobileSdkRelease extends Shape
{
    /**
     * @param array{
     *     ReleaseVersion?: string|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null,
     *     ReleaseNotes?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
