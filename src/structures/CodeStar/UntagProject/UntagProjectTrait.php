<?php

namespace Sunaoka\Aws\Structures\CodeStar\UntagProject;

trait UntagProjectTrait
{
    /**
     * @param UntagProjectRequest $args
     * @return UntagProjectResponse
     */
    public function untagProject(UntagProjectRequest $args)
    {
        $result = parent::untagProject($args->toArray());
        return new UntagProjectResponse($result->toArray());
    }
}
