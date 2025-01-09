<?php

namespace Sunaoka\Aws\Structures\CodeCommit\ListRepositories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repositoryName
 * @property string $repositoryId
 */
class RepositoryNameIdPair extends Shape
{
    /**
     * @param array{
     *     repositoryName?: string,
     *     repositoryId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
