<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FinalBackupId
 * @property list<Tag>|null $FinalBackupTags
 */
class DeleteFileSystemLustreResponse extends Shape
{
    /**
     * @param array{
     *     FinalBackupId?: string|null,
     *     FinalBackupTags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
