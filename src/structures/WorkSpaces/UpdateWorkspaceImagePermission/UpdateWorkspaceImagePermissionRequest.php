<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\UpdateWorkspaceImagePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageId
 * @property bool $AllowCopyImage
 * @property string $SharedAccountId
 */
class UpdateWorkspaceImagePermissionRequest extends Request
{
    /**
     * @param array{
     *     ImageId: string,
     *     AllowCopyImage: bool,
     *     SharedAccountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
