<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListRepositories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $repositoryPrefix
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListRepositoriesRequest extends Request
{
    /**
     * @param array{
     *     repositoryPrefix?: string|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
