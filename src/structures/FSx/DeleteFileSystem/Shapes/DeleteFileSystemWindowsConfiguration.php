<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $SkipFinalBackup
 * @property list<Tag>|null $FinalBackupTags
 */
class DeleteFileSystemWindowsConfiguration extends Shape
{
    /**
     * @param array{
     *     SkipFinalBackup?: bool|null,
     *     FinalBackupTags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
