<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesTrendsV2;

trait GetResourcesTrendsV2Trait
{
    /**
     * @param GetResourcesTrendsV2Request $args
     * @return GetResourcesTrendsV2Response
     */
    public function getResourcesTrendsV2(GetResourcesTrendsV2Request $args)
    {
        $result = parent::getResourcesTrendsV2($args->toArray());
        return new GetResourcesTrendsV2Response($result->toArray());
    }
}
