<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListApps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $appArn
 * @property int<1, 100>|null $maxResults
 * @property string|null $name
 * @property string|null $nextToken
 */
class ListAppsRequest extends Request
{
    /**
     * @param array{
     *     appArn?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     name?: string|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
