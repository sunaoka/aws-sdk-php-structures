<?php

namespace Sunaoka\Aws\Structures\DataZone\ListProjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $groupIdentifier
 * @property int<1, 50> $maxResults
 * @property string $name
 * @property string $nextToken
 * @property string $userIdentifier
 */
class ListProjectsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     groupIdentifier?: string,
     *     maxResults?: int<1, 50>,
     *     name?: string,
     *     nextToken?: string,
     *     userIdentifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
