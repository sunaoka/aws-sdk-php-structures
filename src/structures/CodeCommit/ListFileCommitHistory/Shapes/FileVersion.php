<?php

namespace Sunaoka\Aws\Structures\CodeCommit\ListFileCommitHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Commit $commit
 * @property string $blobId
 * @property string $path
 * @property list<string> $revisionChildren
 */
class FileVersion extends Shape
{
    /**
     * @param array{
     *     commit?: Commit,
     *     blobId?: string,
     *     path?: string,
     *     revisionChildren?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
