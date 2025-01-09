<?php

namespace Sunaoka\Aws\Structures\Sms\ListApps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $appIds
 * @property string $nextToken
 * @property int $maxResults
 */
class ListAppsRequest extends Request
{
    /**
     * @param array{
     *     appIds?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
