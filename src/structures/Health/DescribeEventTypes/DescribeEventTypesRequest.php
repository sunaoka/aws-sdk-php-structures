<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EventTypeFilter $filter
 * @property string $locale
 * @property string $nextToken
 * @property int $maxResults
 */
class DescribeEventTypesRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\EventTypeFilter,
     *     locale?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
