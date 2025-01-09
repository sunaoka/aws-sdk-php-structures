<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeRepositories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property list<string> $repositoryNames
 * @property string $nextToken
 * @property int<1, 1000> $maxResults
 */
class DescribeRepositoriesRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryNames?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
