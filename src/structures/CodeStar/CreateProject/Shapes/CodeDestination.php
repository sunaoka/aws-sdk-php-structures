<?php

namespace Sunaoka\Aws\Structures\CodeStar\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CodeCommitCodeDestination|null $codeCommit
 * @property GitHubCodeDestination|null $gitHub
 */
class CodeDestination extends Shape
{
    /**
     * @param array{
     *     codeCommit?: CodeCommitCodeDestination|null,
     *     gitHub?: GitHubCodeDestination|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
