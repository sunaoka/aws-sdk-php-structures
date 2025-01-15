<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventAggregates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EventFilter|null $filter
 * @property 'eventTypeCategory' $aggregateField
 * @property int<10, 100>|null $maxResults
 * @property string|null $nextToken
 */
class DescribeEventAggregatesRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\EventFilter|null,
     *     aggregateField: 'eventTypeCategory',
     *     maxResults?: int<10, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
