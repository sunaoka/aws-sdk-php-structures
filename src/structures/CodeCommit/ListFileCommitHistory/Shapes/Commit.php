<?php

namespace Sunaoka\Aws\Structures\CodeCommit\ListFileCommitHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $commitId
 * @property string $treeId
 * @property list<string> $parents
 * @property string $message
 * @property UserInfo $author
 * @property UserInfo $committer
 * @property string $additionalData
 */
class Commit extends Shape
{
    /**
     * @param array{
     *     commitId?: string,
     *     treeId?: string,
     *     parents?: list<string>,
     *     message?: string,
     *     author?: UserInfo,
     *     committer?: UserInfo,
     *     additionalData?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
