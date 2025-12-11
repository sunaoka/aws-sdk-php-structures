<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateWorkspaceTheme;

trait UpdateWorkspaceThemeTrait
{
    /**
     * @param UpdateWorkspaceThemeRequest $args
     * @return UpdateWorkspaceThemeResponse
     */
    public function updateWorkspaceTheme(UpdateWorkspaceThemeRequest $args)
    {
        $result = parent::updateWorkspaceTheme($args->toArray());
        return new UpdateWorkspaceThemeResponse($result->toArray());
    }
}
