<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetEventActor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EventId
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property string|null $Label
 * @property string|null $Category
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $Confidence
 * @property list<ApiPattern>|null $ApiPatterns
 */
class RelatedEvent extends Shape
{
    /**
     * @param array{
     *     EventId?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     Label?: string|null,
     *     Category?: string|null,
     *     Confidence?: 'LOW'|'MEDIUM'|'HIGH'|null,
     *     ApiPatterns?: list<ApiPattern>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
