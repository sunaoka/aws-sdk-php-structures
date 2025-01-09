<?php

namespace Sunaoka\Aws\Structures\CodePipeline\CreatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceActionName
 * @property list<GitPushFilter> $push
 * @property list<GitPullRequestFilter> $pullRequest
 */
class GitConfiguration extends Shape
{
    /**
     * @param array{
     *     sourceActionName: string,
     *     push?: list<GitPushFilter>,
     *     pullRequest?: list<GitPullRequestFilter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
