<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListThemes;

trait ListThemesTrait
{
    /**
     * @param ListThemesRequest $args
     * @return ListThemesResponse
     */
    public function listThemes(ListThemesRequest $args)
    {
        $result = parent::listThemes($args->toArray());
        return new ListThemesResponse($result->toArray());
    }
}
