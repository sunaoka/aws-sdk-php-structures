<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdatePullRequestStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pullRequestId
 * @property 'OPEN'|'CLOSED' $pullRequestStatus
 */
class UpdatePullRequestStatusRequest extends Request
{
    /**
     * @param array{
     *     pullRequestId: string,
     *     pullRequestStatus: 'OPEN'|'CLOSED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
