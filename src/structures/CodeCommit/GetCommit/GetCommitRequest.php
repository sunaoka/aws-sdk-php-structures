<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetCommit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $commitId
 */
class GetCommitRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     commitId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
