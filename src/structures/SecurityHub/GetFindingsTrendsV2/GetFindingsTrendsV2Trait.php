<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingsTrendsV2;

trait GetFindingsTrendsV2Trait
{
    /**
     * @param GetFindingsTrendsV2Request $args
     * @return GetFindingsTrendsV2Response
     */
    public function getFindingsTrendsV2(GetFindingsTrendsV2Request $args)
    {
        $result = parent::getFindingsTrendsV2($args->toArray());
        return new GetFindingsTrendsV2Response($result->toArray());
    }
}
