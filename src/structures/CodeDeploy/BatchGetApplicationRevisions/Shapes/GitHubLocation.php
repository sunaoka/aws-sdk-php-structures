<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetApplicationRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repository
 * @property string $commitId
 */
class GitHubLocation extends Shape
{
    /**
     * @param array{
     *     repository?: string,
     *     commitId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
