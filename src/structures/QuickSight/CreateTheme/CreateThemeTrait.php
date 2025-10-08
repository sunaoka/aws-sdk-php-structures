<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTheme;

trait CreateThemeTrait
{
    /**
     * @param CreateThemeRequest $args
     * @return CreateThemeResponse
     */
    public function createTheme(CreateThemeRequest $args)
    {
        $result = parent::createTheme($args->toArray());
        return new CreateThemeResponse($result->toArray());
    }
}
