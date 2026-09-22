<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListViews;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'USER'|'MANAGED'|null $type
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListViewsRequest extends Request
{
    /**
     * @param array{
     *     type?: 'USER'|'MANAGED'|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
