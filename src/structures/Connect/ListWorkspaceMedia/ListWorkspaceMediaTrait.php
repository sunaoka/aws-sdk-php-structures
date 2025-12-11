<?php

namespace Sunaoka\Aws\Structures\Connect\ListWorkspaceMedia;

trait ListWorkspaceMediaTrait
{
    /**
     * @param ListWorkspaceMediaRequest $args
     * @return ListWorkspaceMediaResponse
     */
    public function listWorkspaceMedia(ListWorkspaceMediaRequest $args)
    {
        $result = parent::listWorkspaceMedia($args->toArray());
        return new ListWorkspaceMediaResponse($result->toArray());
    }
}
