<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\GetTheme;

trait GetThemeTrait
{
    /**
     * @param GetThemeRequest $args
     * @return GetThemeResponse
     */
    public function getTheme(GetThemeRequest $args)
    {
        $result = parent::getTheme($args->toArray());
        return new GetThemeResponse($result->toArray());
    }
}
