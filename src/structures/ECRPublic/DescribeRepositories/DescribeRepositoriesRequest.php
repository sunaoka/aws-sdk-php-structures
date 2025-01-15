<?php

namespace Sunaoka\Aws\Structures\ECRPublic\DescribeRepositories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property list<string>|null $repositoryNames
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 */
class DescribeRepositoriesRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     repositoryNames?: list<string>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
