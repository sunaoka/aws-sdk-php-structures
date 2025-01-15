<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $SkipFinalBackup
 * @property list<Tag>|null $FinalBackupTags
 * @property list<'DELETE_CHILD_VOLUMES_AND_SNAPSHOTS'>|null $Options
 */
class DeleteFileSystemOpenZFSConfiguration extends Shape
{
    /**
     * @param array{
     *     SkipFinalBackup?: bool|null,
     *     FinalBackupTags?: list<Tag>|null,
     *     Options?: list<'DELETE_CHILD_VOLUMES_AND_SNAPSHOTS'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
