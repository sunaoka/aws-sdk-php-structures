<?php

namespace Sunaoka\Aws\Structures\Bedrock\ArchiveProject;

trait ArchiveProjectTrait
{
    /**
     * @param ArchiveProjectRequest $args
     * @return ArchiveProjectResponse
     */
    public function archiveProject(ArchiveProjectRequest $args)
    {
        $result = parent::archiveProject($args->toArray());
        return new ArchiveProjectResponse($result->toArray());
    }
}
