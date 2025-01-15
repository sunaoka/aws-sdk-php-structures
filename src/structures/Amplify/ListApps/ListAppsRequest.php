<?php

namespace Sunaoka\Aws\Structures\Amplify\ListApps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<0, 100>|null $maxResults
 */
class ListAppsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
