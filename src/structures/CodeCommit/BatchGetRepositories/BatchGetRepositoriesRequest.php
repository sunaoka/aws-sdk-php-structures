<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchGetRepositories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $repositoryNames
 */
class BatchGetRepositoriesRequest extends Request
{
    /**
     * @param array{repositoryNames: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
