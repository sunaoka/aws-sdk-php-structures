<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateStandbyWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrimaryWorkspaceId
 * @property string|null $VolumeEncryptionKey
 * @property string $DirectoryId
 * @property list<Tag>|null $Tags
 */
class StandbyWorkspace extends Shape
{
    /**
     * @param array{
     *     PrimaryWorkspaceId: string,
     *     VolumeEncryptionKey?: string|null,
     *     DirectoryId: string,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
