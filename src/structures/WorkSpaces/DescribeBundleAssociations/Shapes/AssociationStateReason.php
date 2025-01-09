<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeBundleAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ValidationError.InsufficientDiskSpace'|'ValidationError.InsufficientMemory'|'ValidationError.UnsupportedOperatingSystem'|'DeploymentError.InternalServerError'|'DeploymentError.WorkspaceUnreachable' $ErrorCode
 * @property string $ErrorMessage
 */
class AssociationStateReason extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: 'ValidationError.InsufficientDiskSpace'|'ValidationError.InsufficientMemory'|'ValidationError.UnsupportedOperatingSystem'|'DeploymentError.InternalServerError'|'DeploymentError.WorkspaceUnreachable',
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
