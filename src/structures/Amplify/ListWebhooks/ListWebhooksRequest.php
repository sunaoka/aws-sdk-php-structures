<?php

namespace Sunaoka\Aws\Structures\Amplify\ListWebhooks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $nextToken
 * @property int<0, 50> $maxResults
 */
class ListWebhooksRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     nextToken?: string,
     *     maxResults?: int<0, 50>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
