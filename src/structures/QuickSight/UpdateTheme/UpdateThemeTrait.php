<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTheme;

trait UpdateThemeTrait
{
    /**
     * @param UpdateThemeRequest $args
     * @return UpdateThemeResponse
     */
    public function updateTheme(UpdateThemeRequest $args)
    {
        $result = parent::updateTheme($args->toArray());
        return new UpdateThemeResponse($result->toArray());
    }
}
