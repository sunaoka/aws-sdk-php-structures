<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EventFilter|null $filter
 * @property string|null $nextToken
 * @property int<10, 100>|null $maxResults
 * @property string|null $locale
 */
class DescribeEventsRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\EventFilter|null,
     *     nextToken?: string|null,
     *     maxResults?: int<10, 100>|null,
     *     locale?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
