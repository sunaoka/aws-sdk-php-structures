<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $environmentId
 * @property int<1, 2000>|null $maxResults
 * @property list<string>|null $names
 * @property string|null $nextToken
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     environmentId?: string|null,
     *     maxResults?: int<1, 2000>|null,
     *     names?: list<string>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
