<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\ListProjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 */
class ListProjectsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 250>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
