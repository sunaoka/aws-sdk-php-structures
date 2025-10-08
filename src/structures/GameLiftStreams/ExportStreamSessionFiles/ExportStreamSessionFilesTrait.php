<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\ExportStreamSessionFiles;

trait ExportStreamSessionFilesTrait
{
    /**
     * @param ExportStreamSessionFilesRequest $args
     * @return ExportStreamSessionFilesResponse
     */
    public function exportStreamSessionFiles(ExportStreamSessionFilesRequest $args)
    {
        $result = parent::exportStreamSessionFiles($args->toArray());
        return new ExportStreamSessionFilesResponse($result->toArray());
    }
}
