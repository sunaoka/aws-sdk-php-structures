<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListImports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ImportId
 * @property 'INITIALIZING'|'IN_PROGRESS'|'FAILED'|'STOPPED'|'COMPLETED' $ImportStatus
 * @property list<string> $Destinations
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 */
class ImportsListItem extends Shape
{
    /**
     * @param array{
     *     ImportId?: string,
     *     ImportStatus?: 'INITIALIZING'|'IN_PROGRESS'|'FAILED'|'STOPPED'|'COMPLETED',
     *     Destinations?: list<string>,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
