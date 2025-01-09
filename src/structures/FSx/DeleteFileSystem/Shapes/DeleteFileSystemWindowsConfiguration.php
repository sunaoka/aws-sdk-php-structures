<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $SkipFinalBackup
 * @property list<Tag> $FinalBackupTags
 */
class DeleteFileSystemWindowsConfiguration extends Shape
{
    /**
     * @param array{
     *     SkipFinalBackup?: bool,
     *     FinalBackupTags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
