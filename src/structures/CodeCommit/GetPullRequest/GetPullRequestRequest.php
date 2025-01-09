<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetPullRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pullRequestId
 */
class GetPullRequestRequest extends Request
{
    /**
     * @param array{pullRequestId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
