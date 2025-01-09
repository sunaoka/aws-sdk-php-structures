<?php

namespace Sunaoka\Aws\Structures\Amplify\ListApps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<0, 100> $maxResults
 */
class ListAppsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<0, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
