<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $SkipFinalBackup
 * @property list<Tag> $FinalBackupTags
 * @property list<'DELETE_CHILD_VOLUMES_AND_SNAPSHOTS'> $Options
 */
class DeleteFileSystemOpenZFSConfiguration extends Shape
{
    /**
     * @param array{
     *     SkipFinalBackup?: bool,
     *     FinalBackupTags?: list<Tag>,
     *     Options?: list<'DELETE_CHILD_VOLUMES_AND_SNAPSHOTS'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
