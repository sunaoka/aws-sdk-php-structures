<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchTopicsV2;

trait SearchTopicsV2Trait
{
    /**
     * @param SearchTopicsV2Request $args
     * @return SearchTopicsV2Response
     */
    public function searchTopicsV2(SearchTopicsV2Request $args)
    {
        $result = parent::searchTopicsV2($args->toArray());
        return new SearchTopicsV2Response($result->toArray());
    }
}
