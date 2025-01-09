<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdatePullRequestDescription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pullRequestId
 * @property string $description
 */
class UpdatePullRequestDescriptionRequest extends Request
{
    /**
     * @param array{
     *     pullRequestId: string,
     *     description: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
