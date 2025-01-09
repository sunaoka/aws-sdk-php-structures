<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchGetCommits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $commitId
 * @property string $errorCode
 * @property string $errorMessage
 */
class BatchGetCommitsError extends Shape
{
    /**
     * @param array{
     *     commitId?: string,
     *     errorCode?: string,
     *     errorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
