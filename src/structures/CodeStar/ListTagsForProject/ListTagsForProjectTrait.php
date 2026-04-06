<?php

namespace Sunaoka\Aws\Structures\CodeStar\ListTagsForProject;

trait ListTagsForProjectTrait
{
    /**
     * @param ListTagsForProjectRequest $args
     * @return ListTagsForProjectResponse
     */
    public function listTagsForProject(ListTagsForProjectRequest $args)
    {
        $result = parent::listTagsForProject($args->toArray());
        return new ListTagsForProjectResponse($result->toArray());
    }
}
