<?php

namespace Sunaoka\Aws\Structures\LakeFormation\SearchDatabasesByLFTags;

trait SearchDatabasesByLFTagsTrait
{
    /**
     * @param SearchDatabasesByLFTagsRequest $args
     * @return SearchDatabasesByLFTagsResponse
     */
    public function searchDatabasesByLFTags(SearchDatabasesByLFTagsRequest $args)
    {
        $result = parent::searchDatabasesByLFTags($args->toArray());
        return new SearchDatabasesByLFTagsResponse($result->toArray());
    }
}
