<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Label
 * @property string|null $Category
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $Confidence
 * @property list<ApiPattern>|null $ApiPatterns
 * @property list<EventActorReference>|null $EventActors
 * @property list<EventTimelineEntry>|null $Timeline
 */
class ApiSecurityEventDetail extends Shape
{
    /**
     * @param array{
     *     Label?: string|null,
     *     Category?: string|null,
     *     Confidence?: 'LOW'|'MEDIUM'|'HIGH'|null,
     *     ApiPatterns?: list<ApiPattern>|null,
     *     EventActors?: list<EventActorReference>|null,
     *     Timeline?: list<EventTimelineEntry>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
