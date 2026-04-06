<?php

namespace Sunaoka\Aws\Structures\CodeStar\ListResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListResourcesRequest extends Request
{
    /**
     * @param array{
     *     projectId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
