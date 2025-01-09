<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetPullRequestOverrideState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pullRequestId
 * @property string $revisionId
 */
class GetPullRequestOverrideStateRequest extends Request
{
    /**
     * @param array{
     *     pullRequestId: string,
     *     revisionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
