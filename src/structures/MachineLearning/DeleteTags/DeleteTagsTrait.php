<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DeleteTags;

trait DeleteTagsTrait
{
    /**
     * @param DeleteTagsRequest $args
     * @return DeleteTagsResponse
     */
    public function deleteTags(DeleteTagsRequest $args)
    {
        $result = parent::deleteTags($args->toArray());
        return new DeleteTagsResponse($result->toArray());
    }
}
