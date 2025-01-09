<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FinalBackupId
 * @property list<Tag> $FinalBackupTags
 */
class DeleteFileSystemOpenZFSResponse extends Shape
{
    /**
     * @param array{
     *     FinalBackupId?: string,
     *     FinalBackupTags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
