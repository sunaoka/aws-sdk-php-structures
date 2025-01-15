<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreatePullRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $title
 * @property string|null $description
 * @property list<Shapes\Target> $targets
 * @property string|null $clientRequestToken
 */
class CreatePullRequestRequest extends Request
{
    /**
     * @param array{
     *     title: string,
     *     description?: string|null,
     *     targets: list<Shapes\Target>,
     *     clientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
