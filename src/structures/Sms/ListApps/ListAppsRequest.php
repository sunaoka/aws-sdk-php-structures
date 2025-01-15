<?php

namespace Sunaoka\Aws\Structures\Sms\ListApps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $appIds
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListAppsRequest extends Request
{
    /**
     * @param array{
     *     appIds?: list<string>|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
