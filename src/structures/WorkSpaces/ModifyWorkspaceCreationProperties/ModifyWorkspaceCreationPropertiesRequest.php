<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyWorkspaceCreationProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property Shapes\WorkspaceCreationProperties $WorkspaceCreationProperties
 */
class ModifyWorkspaceCreationPropertiesRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     WorkspaceCreationProperties: Shapes\WorkspaceCreationProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
