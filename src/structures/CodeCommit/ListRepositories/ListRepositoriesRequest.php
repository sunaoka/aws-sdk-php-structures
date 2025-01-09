<?php

namespace Sunaoka\Aws\Structures\CodeCommit\ListRepositories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property 'repositoryName'|'lastModifiedDate' $sortBy
 * @property 'ascending'|'descending' $order
 */
class ListRepositoriesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     sortBy?: 'repositoryName'|'lastModifiedDate',
     *     order?: 'ascending'|'descending'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
