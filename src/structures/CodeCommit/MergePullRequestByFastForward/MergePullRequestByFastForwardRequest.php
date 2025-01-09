<?php

namespace Sunaoka\Aws\Structures\CodeCommit\MergePullRequestByFastForward;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pullRequestId
 * @property string $repositoryName
 * @property string $sourceCommitId
 */
class MergePullRequestByFastForwardRequest extends Request
{
    /**
     * @param array{
     *     pullRequestId: string,
     *     repositoryName: string,
     *     sourceCommitId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
