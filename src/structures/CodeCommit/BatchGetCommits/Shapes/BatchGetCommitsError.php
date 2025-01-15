<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchGetCommits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $commitId
 * @property string|null $errorCode
 * @property string|null $errorMessage
 */
class BatchGetCommitsError extends Shape
{
    /**
     * @param array{
     *     commitId?: string|null,
     *     errorCode?: string|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
