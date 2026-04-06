<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DirectoryId
 * @property string $UserName
 * @property string $BundleId
 * @property string|null $VolumeEncryptionKey
 * @property bool|null $UserVolumeEncryptionEnabled
 * @property bool|null $RootVolumeEncryptionEnabled
 * @property WorkspaceProperties|null $WorkspaceProperties
 * @property list<Tag>|null $Tags
 * @property string|null $WorkspaceName
 */
class WorkspaceRequest extends Shape
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     UserName: string,
     *     BundleId: string,
     *     VolumeEncryptionKey?: string|null,
     *     UserVolumeEncryptionEnabled?: bool|null,
     *     RootVolumeEncryptionEnabled?: bool|null,
     *     WorkspaceProperties?: WorkspaceProperties|null,
     *     Tags?: list<Tag>|null,
     *     WorkspaceName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
