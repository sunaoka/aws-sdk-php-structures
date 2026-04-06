<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyWorkspaceProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkspaceId
 * @property Shapes\WorkspaceProperties $WorkspaceProperties
 */
class ModifyWorkspacePropertiesRequest extends Request
{
    /**
     * @param array{
     *     WorkspaceId: string,
     *     WorkspaceProperties: Shapes\WorkspaceProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
