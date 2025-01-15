<?php

namespace Sunaoka\Aws\Structures\Amplify\ListWebhooks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string|null $nextToken
 * @property int<0, 50>|null $maxResults
 */
class ListWebhooksRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
