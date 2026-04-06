<?php

namespace Sunaoka\Aws\Structures\Mobile\ExportProject;

trait ExportProjectTrait
{
    /**
     * @param ExportProjectRequest $args
     * @return ExportProjectResponse
     */
    public function exportProject(ExportProjectRequest $args)
    {
        $result = parent::exportProject($args->toArray());
        return new ExportProjectResponse($result->toArray());
    }
}
