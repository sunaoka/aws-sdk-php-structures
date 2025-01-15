<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetApplicationRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $repository
 * @property string|null $commitId
 */
class GitHubLocation extends Shape
{
    /**
     * @param array{
     *     repository?: string|null,
     *     commitId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
