<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListManagedApiEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $managedApiId
 * @property \Aws\Api\DateTimeResult|null $startedAfter
 * @property \Aws\Api\DateTimeResult|null $startedBefore
 * @property int<1, 20>|null $maxResults
 * @property string|null $nextToken
 */
class ListManagedApiEventsRequest extends Request
{
    /**
     * @param array{
     *     managedApiId: string,
     *     startedAfter?: \Aws\Api\DateTimeResult|null,
     *     startedBefore?: \Aws\Api\DateTimeResult|null,
     *     maxResults?: int<1, 20>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
