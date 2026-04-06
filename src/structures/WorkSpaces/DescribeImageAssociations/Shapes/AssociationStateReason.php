<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeImageAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ValidationError.InsufficientDiskSpace'|'ValidationError.InsufficientMemory'|'ValidationError.UnsupportedOperatingSystem'|'DeploymentError.InternalServerError'|'DeploymentError.WorkspaceUnreachable'|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class AssociationStateReason extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: 'ValidationError.InsufficientDiskSpace'|'ValidationError.InsufficientMemory'|'ValidationError.UnsupportedOperatingSystem'|'DeploymentError.InternalServerError'|'DeploymentError.WorkspaceUnreachable'|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
