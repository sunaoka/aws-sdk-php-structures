<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property int $maxResults
 * @property list<string> $names
 * @property string $nextToken
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     environmentId?: string,
     *     maxResults?: int,
     *     names?: list<string>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
