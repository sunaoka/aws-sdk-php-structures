<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListEventsByWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $ChangeTime
 * @property string|null $Label
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $Confidence
 * @property list<ApiPattern>|null $ApiPatterns
 */
class EventTimelineEntry extends Shape
{
    /**
     * @param array{
     *     ChangeTime?: \Aws\Api\DateTimeResult|null,
     *     Label?: string|null,
     *     Confidence?: 'LOW'|'MEDIUM'|'HIGH'|null,
     *     ApiPatterns?: list<ApiPattern>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
