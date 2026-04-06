<?php

namespace Sunaoka\Aws\Structures\CodeStar\ListTagsForProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListTagsForProjectRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
