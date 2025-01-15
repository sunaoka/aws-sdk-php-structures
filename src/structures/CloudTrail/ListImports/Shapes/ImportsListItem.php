<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListImports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ImportId
 * @property 'INITIALIZING'|'IN_PROGRESS'|'FAILED'|'STOPPED'|'COMPLETED'|null $ImportStatus
 * @property list<string>|null $Destinations
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 */
class ImportsListItem extends Shape
{
    /**
     * @param array{
     *     ImportId?: string|null,
     *     ImportStatus?: 'INITIALIZING'|'IN_PROGRESS'|'FAILED'|'STOPPED'|'COMPLETED'|null,
     *     Destinations?: list<string>|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
