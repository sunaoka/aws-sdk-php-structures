<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateTheme;

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
