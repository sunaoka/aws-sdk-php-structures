<?php

namespace Sunaoka\Aws\Structures\CodeCommit\ListRepositories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property 'repositoryName'|'lastModifiedDate'|null $sortBy
 * @property 'ascending'|'descending'|null $order
 */
class ListRepositoriesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     sortBy?: 'repositoryName'|'lastModifiedDate'|null,
     *     order?: 'ascending'|'descending'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
