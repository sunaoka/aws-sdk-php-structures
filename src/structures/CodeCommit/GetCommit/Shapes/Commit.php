<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetCommit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $commitId
 * @property string|null $treeId
 * @property list<string>|null $parents
 * @property string|null $message
 * @property UserInfo|null $author
 * @property UserInfo|null $committer
 * @property string|null $additionalData
 */
class Commit extends Shape
{
    /**
     * @param array{
     *     commitId?: string|null,
     *     treeId?: string|null,
     *     parents?: list<string>|null,
     *     message?: string|null,
     *     author?: UserInfo|null,
     *     committer?: UserInfo|null,
     *     additionalData?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
