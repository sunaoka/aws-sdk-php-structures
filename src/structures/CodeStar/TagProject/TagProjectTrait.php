<?php

namespace Sunaoka\Aws\Structures\CodeStar\TagProject;

trait TagProjectTrait
{
    /**
     * @param TagProjectRequest $args
     * @return TagProjectResponse
     */
    public function tagProject(TagProjectRequest $args)
    {
        $result = parent::tagProject($args->toArray());
        return new TagProjectResponse($result->toArray());
    }
}
