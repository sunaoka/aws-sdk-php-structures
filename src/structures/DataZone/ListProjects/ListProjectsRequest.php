<?php

namespace Sunaoka\Aws\Structures\DataZone\ListProjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string|null $userIdentifier
 * @property string|null $groupIdentifier
 * @property string|null $name
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 */
class ListProjectsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     userIdentifier?: string|null,
     *     groupIdentifier?: string|null,
     *     name?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
