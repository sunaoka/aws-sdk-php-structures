<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DirectoryId
 * @property string $UserName
 * @property string $BundleId
 * @property string $VolumeEncryptionKey
 * @property bool $UserVolumeEncryptionEnabled
 * @property bool $RootVolumeEncryptionEnabled
 * @property WorkspaceProperties $WorkspaceProperties
 * @property list<Tag> $Tags
 * @property string $WorkspaceName
 */
class WorkspaceRequest extends Shape
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     UserName: string,
     *     BundleId: string,
     *     VolumeEncryptionKey?: string,
     *     UserVolumeEncryptionEnabled?: bool,
     *     RootVolumeEncryptionEnabled?: bool,
     *     WorkspaceProperties?: WorkspaceProperties,
     *     Tags?: list<Tag>,
     *     WorkspaceName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
