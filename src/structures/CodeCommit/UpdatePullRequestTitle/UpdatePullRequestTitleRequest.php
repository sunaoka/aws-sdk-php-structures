<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdatePullRequestTitle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pullRequestId
 * @property string $title
 */
class UpdatePullRequestTitleRequest extends Request
{
    /**
     * @param array{
     *     pullRequestId: string,
     *     title: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
