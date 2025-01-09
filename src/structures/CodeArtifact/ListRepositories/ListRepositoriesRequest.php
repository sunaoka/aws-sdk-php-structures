<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListRepositories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryPrefix
 * @property int $maxResults
 * @property string $nextToken
 */
class ListRepositoriesRequest extends Request
{
    /**
     * @param array{
     *     repositoryPrefix?: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
