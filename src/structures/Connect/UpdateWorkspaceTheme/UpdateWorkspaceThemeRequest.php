<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateWorkspaceTheme;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $WorkspaceId
 * @property Shapes\WorkspaceTheme|null $Theme
 */
class UpdateWorkspaceThemeRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     WorkspaceId: string,
     *     Theme?: Shapes\WorkspaceTheme|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
