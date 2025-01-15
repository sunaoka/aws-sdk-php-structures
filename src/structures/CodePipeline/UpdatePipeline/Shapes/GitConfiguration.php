<?php

namespace Sunaoka\Aws\Structures\CodePipeline\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceActionName
 * @property list<GitPushFilter>|null $push
 * @property list<GitPullRequestFilter>|null $pullRequest
 */
class GitConfiguration extends Shape
{
    /**
     * @param array{
     *     sourceActionName: string,
     *     push?: list<GitPushFilter>|null,
     *     pullRequest?: list<GitPullRequestFilter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
