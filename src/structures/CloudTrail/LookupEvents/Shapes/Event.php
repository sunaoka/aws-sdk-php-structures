<?php

namespace Sunaoka\Aws\Structures\CloudTrail\LookupEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EventId
 * @property string|null $EventName
 * @property string|null $ReadOnly
 * @property string|null $AccessKeyId
 * @property \Aws\Api\DateTimeResult|null $EventTime
 * @property string|null $EventSource
 * @property string|null $Username
 * @property list<ResourceShape>|null $Resources
 * @property string|null $CloudTrailEvent
 */
class Event extends Shape
{
    /**
     * @param array{
     *     EventId?: string|null,
     *     EventName?: string|null,
     *     ReadOnly?: string|null,
     *     AccessKeyId?: string|null,
     *     EventTime?: \Aws\Api\DateTimeResult|null,
     *     EventSource?: string|null,
     *     Username?: string|null,
     *     Resources?: list<ResourceShape>|null,
     *     CloudTrailEvent?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
