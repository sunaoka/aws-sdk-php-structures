<?php

namespace Sunaoka\Aws\Structures\ECRPublic\DescribeRepositories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property list<string> $repositoryNames
 * @property string $nextToken
 * @property int $maxResults
 */
class DescribeRepositoriesRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryNames?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
