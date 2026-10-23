<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $owner
 * @property string $repository
 * @property int<1, max>|null $pullRequestNumber
 * @property string|null $headSha
 */
class GitHubTarget extends Shape
{
    /**
     * @param array{
     *     owner: string,
     *     repository: string,
     *     pullRequestNumber?: int<1, max>|null,
     *     headSha?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
