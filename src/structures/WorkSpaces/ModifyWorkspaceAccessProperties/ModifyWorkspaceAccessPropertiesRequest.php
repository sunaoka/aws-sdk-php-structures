<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyWorkspaceAccessProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property Shapes\WorkspaceAccessProperties $WorkspaceAccessProperties
 */
class ModifyWorkspaceAccessPropertiesRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     WorkspaceAccessProperties: Shapes\WorkspaceAccessProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
