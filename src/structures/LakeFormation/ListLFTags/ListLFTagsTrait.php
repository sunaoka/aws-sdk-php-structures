<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListLFTags;

trait ListLFTagsTrait
{
    /**
     * @param ListLFTagsRequest $args
     * @return ListLFTagsResponse
     */
    public function listLFTags(ListLFTagsRequest $args)
    {
        $result = parent::listLFTags($args->toArray());
        return new ListLFTagsResponse($result->toArray());
    }
}
