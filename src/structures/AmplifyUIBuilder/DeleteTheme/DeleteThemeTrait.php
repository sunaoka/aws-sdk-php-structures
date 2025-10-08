<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\DeleteTheme;

trait DeleteThemeTrait
{
    /**
     * @param DeleteThemeRequest $args
     * @return void
     */
    public function deleteTheme(DeleteThemeRequest $args)
    {
        parent::deleteTheme($args->toArray());
    }
}
