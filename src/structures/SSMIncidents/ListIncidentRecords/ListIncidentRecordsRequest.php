<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListIncidentRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $filters
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListIncidentRecordsRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\Filter>,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
