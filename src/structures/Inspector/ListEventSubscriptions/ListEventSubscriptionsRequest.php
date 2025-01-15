<?php

namespace Sunaoka\Aws\Structures\Inspector\ListEventSubscriptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $resourceArn
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListEventSubscriptionsRequest extends Request
{
    /**
     * @param array{
     *     resourceArn?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
