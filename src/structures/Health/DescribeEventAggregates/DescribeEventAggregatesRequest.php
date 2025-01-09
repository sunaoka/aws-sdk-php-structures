<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventAggregates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EventFilter $filter
 * @property 'eventTypeCategory' $aggregateField
 * @property int $maxResults
 * @property string $nextToken
 */
class DescribeEventAggregatesRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\EventFilter,
     *     aggregateField: 'eventTypeCategory',
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
