<?php

namespace Sunaoka\Aws\Structures\CodeCommit\ListFileCommitHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Commit|null $commit
 * @property string|null $blobId
 * @property string|null $path
 * @property list<string>|null $revisionChildren
 */
class FileVersion extends Shape
{
    /**
     * @param array{
     *     commit?: Commit|null,
     *     blobId?: string|null,
     *     path?: string|null,
     *     revisionChildren?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
