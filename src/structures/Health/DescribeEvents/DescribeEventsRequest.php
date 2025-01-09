<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EventFilter $filter
 * @property string $nextToken
 * @property int $maxResults
 * @property string $locale
 */
class DescribeEventsRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\EventFilter,
     *     nextToken?: string,
     *     maxResults?: int,
     *     locale?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
