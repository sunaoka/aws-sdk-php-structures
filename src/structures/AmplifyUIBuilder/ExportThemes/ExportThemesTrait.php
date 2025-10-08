<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ExportThemes;

trait ExportThemesTrait
{
    /**
     * @param ExportThemesRequest $args
     * @return ExportThemesResponse
     */
    public function exportThemes(ExportThemesRequest $args)
    {
        $result = parent::exportThemes($args->toArray());
        return new ExportThemesResponse($result->toArray());
    }
}
