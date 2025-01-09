<?php

namespace Sunaoka\Aws\Structures\Amplify\ListApps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 */
class ListAppsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
