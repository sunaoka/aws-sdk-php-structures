<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchGetCommits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $commitIds
 * @property string $repositoryName
 */
class BatchGetCommitsRequest extends Request
{
    /**
     * @param array{
     *     commitIds: list<string>,
     *     repositoryName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
