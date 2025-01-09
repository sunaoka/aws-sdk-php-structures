<?php

namespace Sunaoka\Aws\Structures\CloudTrail\LookupEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EventId
 * @property string $EventName
 * @property string $ReadOnly
 * @property string $AccessKeyId
 * @property \Aws\Api\DateTimeResult $EventTime
 * @property string $EventSource
 * @property string $Username
 * @property list<Resource> $Resources
 * @property string $CloudTrailEvent
 */
class Event extends Shape
{
    /**
     * @param array{
     *     EventId?: string,
     *     EventName?: string,
     *     ReadOnly?: string,
     *     AccessKeyId?: string,
     *     EventTime?: \Aws\Api\DateTimeResult,
     *     EventSource?: string,
     *     Username?: string,
     *     Resources?: list<Resource>,
     *     CloudTrailEvent?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
