<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreatePullRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $title
 * @property string $description
 * @property list<Shapes\Target> $targets
 * @property string $clientRequestToken
 */
class CreatePullRequestRequest extends Request
{
    /**
     * @param array{
     *     title: string,
     *     description?: string,
     *     targets: list<Shapes\Target>,
     *     clientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
