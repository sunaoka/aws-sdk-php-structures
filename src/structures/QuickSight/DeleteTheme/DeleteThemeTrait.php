<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteTheme;

trait DeleteThemeTrait
{
    /**
     * @param DeleteThemeRequest $args
     * @return DeleteThemeResponse
     */
    public function deleteTheme(DeleteThemeRequest $args)
    {
        $result = parent::deleteTheme($args->toArray());
        return new DeleteThemeResponse($result->toArray());
    }
}
