<?php

namespace Sunaoka\Aws\Structures\CodeCommit\MergeBranchesBySquash\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ReplaceContentEntry> $replaceContents
 * @property list<DeleteFileEntry> $deleteFiles
 * @property list<SetFileModeEntry> $setFileModes
 */
class ConflictResolution extends Shape
{
    /**
     * @param array{
     *     replaceContents?: list<ReplaceContentEntry>,
     *     deleteFiles?: list<DeleteFileEntry>,
     *     setFileModes?: list<SetFileModeEntry>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
