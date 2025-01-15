<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EventTypeFilter|null $filter
 * @property string|null $locale
 * @property string|null $nextToken
 * @property int<10, 100>|null $maxResults
 */
class DescribeEventTypesRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\EventTypeFilter|null,
     *     locale?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<10, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
