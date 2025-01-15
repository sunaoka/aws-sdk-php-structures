<?php

namespace Sunaoka\Aws\Structures\CodeCommit\ListRepositories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $repositoryName
 * @property string|null $repositoryId
 */
class RepositoryNameIdPair extends Shape
{
    /**
     * @param array{
     *     repositoryName?: string|null,
     *     repositoryId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
