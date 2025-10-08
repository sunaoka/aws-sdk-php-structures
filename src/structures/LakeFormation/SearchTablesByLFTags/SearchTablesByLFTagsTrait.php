<?php

namespace Sunaoka\Aws\Structures\LakeFormation\SearchTablesByLFTags;

trait SearchTablesByLFTagsTrait
{
    /**
     * @param SearchTablesByLFTagsRequest $args
     * @return SearchTablesByLFTagsResponse
     */
    public function searchTablesByLFTags(SearchTablesByLFTagsRequest $args)
    {
        $result = parent::searchTablesByLFTags($args->toArray());
        return new SearchTablesByLFTagsResponse($result->toArray());
    }
}
