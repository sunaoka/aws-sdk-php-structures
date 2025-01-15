<?php

namespace Sunaoka\Aws\Structures\CodeCommit\MergeBranchesByThreeWay\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ReplaceContentEntry>|null $replaceContents
 * @property list<DeleteFileEntry>|null $deleteFiles
 * @property list<SetFileModeEntry>|null $setFileModes
 */
class ConflictResolution extends Shape
{
    /**
     * @param array{
     *     replaceContents?: list<ReplaceContentEntry>|null,
     *     deleteFiles?: list<DeleteFileEntry>|null,
     *     setFileModes?: list<SetFileModeEntry>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
